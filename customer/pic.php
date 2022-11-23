
<?php
session_start();
error_reporting(0);
include("../config/dbconfig.php");

include("header.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

?>
<!-- Site Content Wrapper -->

            <div class="dt-content-wrapper">

                <!-- Site Content -->
                <div class="dt-content">

                    <!-- Page Header -->
                    
                    <!-- /page header -->
 <div class="dt-entry__header">

Account Password

                    </div>

                    <!-- Grid -->
                    <div class="row">

                        <!-- Grid Item -->
                        <div class="col-xl-12">
                    <!-- /page header -->
  <!-- Grid Item -->

              <!-- Card -->
              <div class="dt-card bg- text-black">

                <!-- Card Header -->
                <div class="dt-card__header">

                  <!-- Card Heading -->
                  <div class="dt-card__heading">
                    <div class="d-flex align-items-center">
                      <i class="icon icon-login-page icon-fw icon-2x text-black mr-2"></i>
                      <h3 class="dt-card__title text-black">Change Profile Photo</h3>
                    </div>
                  </div>
                  <!-- /card heading -->

                  <!-- Card Tools -->
                  <div class="dt-card__tools align-self-start mt-n3 mr-n2">
                    <!-- Dropdown -->
                    <div class="dropdown">

                      
                    </div>
                    <!-- /dropdown -->
                  </div>
                  <!-- /card tools -->

                </div>
                <!-- /card header -->

<?

function uploadRes($name){
    $path=null;
    $tmp_name=$_FILES[$name]['tmp_name'];
       if ($tmp_name){
           $fname=$_FILES[$name]['name'];
           $mime=$_FILES[$name]['type'];
           $_size=$_FILES[$name]['size'];
           switch($mime)  {
                case "image/png"  : $ext='.png';
                break;
                case "image/jpeg" :  // Both regular and progressive jpegs
                case "image/pjpeg":	$ext='.jpg';
                break;
                case "image/gif"  : $ext='.gif';
                break;
            }
           if($ext&&$_size<=30000000){
                $dir='../upload/';
                $saveto='';
               do{
                $fin_name=md5(rand(10000000, 20000000));
                $loc=$fin_name.$ext;

                $saveto=$dir.$loc;
               }
               while(file_exists($saveto));
               if(!is_dir($dir)) mkdir($dir,0777,true);
               if(move_uploaded_file($tmp_name, $saveto)) $path=$loc;
              }
        }
      return $path;
}

if(isset($_POST["upload"]))
{
    if ($path=uploadRes('pp_res'))
    {
mysqli_query($con,"UPDATE customers SET pp_res='$path' WHERE customerid='$_SESSION[customerid]'");
	if(mysqli_affected_rows($con) == 1)
	{
	echo "<script>swal('Succesful!', 'Your new photo has been updated successfully!', 'success')</script>;";
	}
	else
	{
	echo "<script>swal('error!', 'Photo upoad failed, please ensure that you upload a valid photo!', 'error')</script>;";
	}
        }
    else
       echo "<script>swal('Error', 'Unknown error', 'error')</script>;";
}?>

<!--Card-->
<div class="card mb-4">
<div class='card-header'>Photo</div>
  <!--Card content-->
  <div class="card-body">
    <img src='<?php echo $profile['pp_res']?'../upload/'.$profile['pp_res']:'../assets/images/icon-account.png';?>' class='img-responsive img-rounded mw-100'/>
  </div>

</div>
<!--/.Card-->

                <!-- Card Body -->
                <div class="dt-card__body pb-3">
                  <!-- Form -->
                 <form id="form1" name="form1" method="post" action="" enctype='multipart/form-data'>
            <?php echo $ctrow; ?>
                    <!-- Grid -->
                    <div class="row">
                      <!-- Grid Item -->
                      <div class="col-sm-6">
                      <div class="form-group text-left">
            <label for="form2">Passport Photograph</label>
            <input type="file" id="pp_res" name='pp_res' class="form-control" value=''>
        </div>
            
                      </div>
                      <!-- / grid item -->

                     
                    </div>
                    <!-- /grid -->
                 
                  <!-- /form -->
                </div>
                <!-- /card body -->

                <!-- Card Footer -->
                <div class="px-7 py-5 border-top border-width-2 border-black-transparent">
                  <span class="d-block display-4 mb-2">
                
                 <tr>
        	      <td colspan="2"><div align="right">
        	        <input type="submit" class="btn btn-secondary" name="upload" id="upload" value="Upload" />
        	      </div></td>
       	        </tr></div>
                <!-- /card footer -->
 </form>
              </div>
              <!-- /card -->

            </div>
            <!-- /grid item -->
                    <!-- Entry Header -->


                    



                </div></div>

                <!-- /site content -->



<?php include'footer.php' ?>

</body>
    