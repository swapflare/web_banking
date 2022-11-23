<?php
session_start();
error_reporting(0);
include("../config/dbconfig.php");
include("header.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

if(isset($_POST["adda"]))
{
$sql="INSERT INTO loanpayment (payment_id,	customer_id,	loan_amt,	interest,	total_amt,	paid,	balance,	paid_date)
VALUES
('$_POST[payment_id]','$_POST[customer_id]','$_POST[loan_amt]','$_POST[interest]','$_POST[total_amt]','$_POST[paid]','$_POST[balance]','$_POST[paydate]')";

if (!mysqli_query($con,$sql,$con))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";
}

if(isset($_POST["update"]))
{
	mysqli_query($con,"UPDATE loanpayment SET payment_id='$_POST[payment_id]',	customer_id='$_POST[customer_id]',	loan_amt='$_POST[loan_amt]',	interest='$_POST[interest]',	total_amt='$_POST[total_amt]',	paid='$_POST[paid]',	balance='$_POST[balance]',	paid_date='$_POST[paydate]' WHERE payment_id='$_POST[payment_id]'");
	

$updt= mysqli_affected_rows($con);
    if($updt==1)
{
$successresult="Record updated successfully";
}
}
?>
<!-- Site Content Wrapper -->

              <!-- Site Content Wrapper -->
            <div class="dt-content-wrapper">

                <!-- Site Content -->
                <div class="dt-content">

                    <!-- Page Header -->
                    <div class="dt-page__header">
                        <h1 class="dt-page__title">My Loan Payments</h1>
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
                                    <h3 class="dt-entry__title">View Loan Payment</h3>
                                </div>
                                <!-- /entry heading -->

                            </div>
                            <!-- /entry header -->

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Body -->
                                <div class="dt-card__body">

                                    <!-- Tables -->
                                    <div class="table-responsive">

                                        <table id="data-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Payment ID</th>
                                                <th>Loan Number</th>
                                                <th>Amount Paid</th>
                                                <th>Payment Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           </tr>
 <?php     $result = mysqli_query($con,"select * from loanpayment ");
			  while($arrvar = mysqli_fetch_array($result))
			  {
                            echo " <tr>
        	      <td height='46'>LOPAY$arrvar[id]</td>
				  <td>$arrvar[loanid]</td>
				   <td>$arrvar[paidamt]</td>
				    <td>$arrvar[date]</td>
                                    </tr>";
			  }
			  ?>                             </tbody>
                                            <tfoot>
                                            <tr>
                                                 <th>Payment ID</th>
                                                <th>Loan Number</th>
                                                <th>Amount Paid</th>
                                                <th>Payment Date</th>
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
