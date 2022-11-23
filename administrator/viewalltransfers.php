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
                        <h1 class="dt-page__title">View Fund Transfers</h1>
                    </div>
                    <!-- /page header -->

                    <!-- Grid -->
                    <div class="row">
                    <!-- Grid Item -->
                        <div class="col-xl-12">

                            <!-- Entry Header -->
                            <div class="dt-entry__header">

                                <!-- Entry Heading -->
                                <div class="dt-entry__heading">
                                    <h3 class="dt-entry__title">All Fund Transfers</h3>
                                </div>
                                <!-- /entry heading -->

                            </div>
                            <!-- /entry header -->
<?php
if($_REQUEST['action']=='delete'&&($id=(int)$_REQUEST['id'])){ 
    mysqli_query($con,"Delete from transfers where id=$id");
    echo "<script>swal('Successful!', 'Transfer Successfully Deleted!', 'success')</script>";
}
$customerid=(int)$_GET['custid'];
if($customerid) $where=" where sender=$customerid";
$loan=mysqli_query($con,"select * from transfers $where");
?>
                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Body -->
                                <div class="dt-card__body">

                                    <!-- Tables -->
                                    <div class="table-responsive">

                                        <table id="data-table" class="table table-striped table-bordered table-hover" data-order='[[5,"desc"]]'>
                                            <thead>
                                            <tr>
                                                <th>Receiver's Name</th>
                                                <th>Receiver's Bank</th>
                                                <th>Bank Address</th>
                                                <th>Bank Account No</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           </tr>
 <?php
				  $i=1;
			  while($arrvar = mysqli_fetch_array($loan))
                          {
        	           echo " <tr><td>$arrvar[name]</td>
        	           		  <td>$arrvar[bank]</td>
        	           		  <td>$arrvar[address]</td>
                              <td>$arrvar[receiver]</td>
				
				
                                <td>$cur $arrvar[amount]</td>
				<td>$arrvar[date]</td>"; ?>
<td>
<span class="badge badge-pill badge-danger mb-1 mr-1"><? if ($arrvar[status]=='0') print "Pending";?></span>
<span class="badge badge-pill badge-success mb-1 mr-1"><? if ($arrvar[status]=='1') print "Successful";?></span>


</td>
<td><a class='btn btn-danger' href='viewalltransfers.php?action=delete&id=<?php echo $arrvar['id'];?>'>Delete</a>
      	      </tr><?
				$i++;
			  }
			  ?>                                     </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Receiver's Name</th>
                                                <th>Receiver's Bank</th>
                                                <th>Bank Address</th>
                                                <th>Bank Account No</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Status</th>
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



<?php include'footer.php' ?>
    
<script src="../assets/node_modules/datatables.net/js/jquery.dataTables.js"></script>
<script src="../assets/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
<script src="../assets/js/custom/data-table.js"></script>
