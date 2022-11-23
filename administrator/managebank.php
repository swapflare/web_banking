<?php
session_start();
error_reporting(0);
include("../config/dbconfig.php");

include("header.php");

if(!($_SESSION["adminid"]))
{
		header("Location: login.php");
}
?>
<!-- Site Content Wrapper -->

              <!-- Site Content Wrapper -->
            <div class="dt-content-wrapper">

                <!-- Site Content -->
                <div class="dt-content">

                    <!-- Page Header -->
                    <div class="dt-page__header">
                        <h1 class="dt-page__title">Manage Banks</h1>
                    </div>
                    <!-- /page header -->

                    <!-- Grid -->
                    <div class="row">
                    <?
                    if(isset($_GET["delete"]))
{
$sqq="DELETE from banks WHERE id='".$_GET[id]."'";
echo "<script>swal('Succesful!', 'Bank Has Been Deleted!', 'success')</script>";
 
   if ((!mysqli_query($con,$sqq)))
  {
  die('Error: ' . mysqli_error($con));
  print_r($sqq);
  }
  if(mysqli_affected_rows($con) == 1)
  {
	$successresult = "Transaction successfull";
  }
  else
  {
	  $successresult = "Failed to transfer";
  }
   }
  ?>
  
  <?
if(isset($_POST["create"]))
{
    $sql="SELECT * FROM banks WHERE code='".$_POST['code']."'";
    if(mysqli_num_rows(mysqli_query($con,$sql)) > 0)
    {
     echo"<script>swal('Error!', 'This Bank Alredy Exists!', 'error')</script>";
    }
    else
    {
    $sql="INSERT INTO banks (bank, code) VALUES ('$_POST[bank]','$_POST[code]')";
    if (!mysqli_query($con,$sql))
    {
    die('Error: ' . mysqli_error($con));
    }
    else  echo"<script>swal('Success!', 'Bank Created Successfully!', 'success')</script>";
    }
}

$loan=mysqli_query($con,"select * from banks ");
?>
 
                        <!-- Grid Item -->
                        <div class="col-xl-12">

                            <!-- Entry Header -->
                            <div class="dt-entry__header">

                                <!-- Entry Heading -->
                                <div class="dt-entry__heading">
                                    <h3 class="dt-entry__title">All Banks</h3>
                                </div>
                                <!-- /entry heading -->

                            </div>
                            <!-- /entry header -->

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Body -->
                                <div class="dt-card__body">
										
								<button  class='btn btn-secondary' data-toggle="modal" data-target="#bankModal">Create New Bank </button>
								<br>
                                    <!-- Tables -->
                                    <div class="table-responsive">

                                        <table id="data-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Bank Name</th>
                                                <th>Bank Code</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                           </tr>
 <?php
				  $i=1;
			  while($arrvar = mysqli_fetch_array($loan))
                          {
        	           echo " <tr>
                <td>$arrvar[bank]</td>
				<td>$arrvar[code]</td>
<td>
<a class='btn btn-secondary' href='managebank.php?delete=delete&id=$arrvar[id]'>Delete</a>
</td>
      	      </tr>";
				$i++;
			  }
			  ?>                                     </tbody>
                                            <tfoot>
                                            <tr>
                                               <th>Bank Name</th>
                                                <th>Bank Code</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /tables -->

                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                    </div>
                    <!-- /grid -->

                </div>
                <!-- /site content -->


<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="bankModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Credit Bank</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <form method="post" action="">               
       <label>Bank Name</label>
                          <input type="text" name="bank"  class="form-control">
                        </div>
        <div class="form-group">              
       <label>Bank Code</label>
                          <input type="number" name="code"  class="form-control">
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      <input name="create" type="submit" value="Create" class="btn btn-secondary" >
      </div>
    </div></form>

  </div>
</div>


<?php include'footer.php' ?>
    
<script src="../assets/node_modules/datatables.net/js/jquery.dataTables.js"></script>
<script src="../assets/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
<script src="../assets/js/custom/data-table.js"></script>
