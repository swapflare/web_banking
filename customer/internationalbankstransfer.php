
<?php
session_start();
error_reporting(0);
include("../config/dbconfig.php");
include("header.php");
include("../config/WelcomeMailer.php");

$query="SELECT * from system_settings"; 
 $result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
$bname=$row['bank_name'];
$email=$row['email'];
$currency=$row['currency'];
$phone=$row['phone'];
 }

if(isset($_POST['pay']))
{
$rname = $_POST['rname'];
$swift = $_POST['swift'];
$bankadd = $_POST['bankadd'];
$bank = $_POST['bank'];
$payamt = $_POST['pay_amt'];
$acct= $_POST['acctno'];

$dt = date("Y-m-d h:i:s");
$imf_code=rand(100000,999999);
$cot_code=rand(100000,999999);
$_SESSION['imf_code']=$imf_code;
$_SESSION['cot_code']=$cot_code;

mysqli_query($con,"update customers set cot='$cot_code',imf='$imf_code' WHERE customerid='$_SESSION[customerid]'");

$raw_msg="A transfer payment of $payamt $currency was initiated at $dt UTC.<br/> Please use IMF CODE: <b>$imf_code</b> and COT CODE: <b>$cot_code</b> to confirm the transaction<br/>Please contact the bank if this transaction was not initiated by you.";
$receiver=$profile['email'];
$subject='Confirm Transaction';
$title=$_POST['Authentication'];
$mailer=new WelcomeMailer('#4280D6','#3968BC');
$msg=$mailer->makeMsgEmailTemplate($raw_msg,$bname,$title);
$mailer->mailTo($receiver,$msg,$subject,$email);
}
$dt = date("Y-m-d h:i:s");
$custid=  mysqli_real_escape_string($con,$_SESSION['customerid']);
$resultpass = mysqli_query($con,"select * from customers WHERE customerid='$custid'");
$arrpayment1 = mysqli_fetch_array($resultpass);

if(isset($_POST["pay2"]))
{
       
	if($_POST['trpass'] == $arrpayment1['transpassword'])
	{
            $rr = mysqli_query($con,"SELECT * FROM accounts WHERE customerid ='".$_SESSION['customerid']."'");
            $rrarr=  mysqli_fetch_array($rr);
			$amount=$_POST['payamt'];
            if ($amount>$rrarr['accountbalance'])
            { print "
			<script language='javascript'>
			window.location = 'internationalsent.php?error=insufficientbalance';
			</script>
			";
            exit(0);
            }
            
             if ($_POST['cot']!==$arrpayment1['cot'])
            { 
            print "
			<script language='javascript'>
			window.location = 'internationalsent.php?error=cot';
			</script>
			";
            exit(0);
            }
            
              
             if ($_POST['imf']!==$arrpayment1['imf'])
            { 
            print "
			<script language='javascript'>
			window.location = 'international.php?error=imf';
			</script>
			";
            exit(0);
            }
            
                
                if (isset($_POST['payeetype']))
                {
                    
                    if ($_POST['payeetype'] == 'int')
                    {     
                      mysqli_query($con,"UPDATE accounts SET accountbalance = accountbalance+$amount WHERE customerid ='".$_POST[payto]."'") or die(mysqli_error ());
                    }
                }
                  $sql1="INSERT INTO transactions (type,paymentdate,payeeid,receiveid,amount,charged,paymentstat,cashier) VALUES ('Transfer','$dt','$_SESSION[customerid]','$_POST[payt]','$amount',0,'active','admin')";
                  $sql2="INSERT INTO withdrawals (userid,amount,status) VALUES ('$_SESSION[customerid]','$amount','1')";
                  $sql="INSERT INTO transfers (sender,receiver,name,bank,amount,status,address, swift) VALUES ('$_SESSION[customerid]','$_POST[acct]','$_POST[name]','$_POST[bank]','$amount','0','$_POST[addr]','$_POST[swift]')";
              
                mysqli_query($con,"UPDATE accounts SET accountbalance = accountbalance-$amount WHERE customerid ='".$_SESSION['customerid']."'");
		       if (!mysqli_query($con,$sql))
				  {
				  //die('Error: ' . mysqli_error($con));
                    echo "<script>swal('Error!', 'Network Error. Please Try Again Later!', 'error')</script>";
				  }
				  else if (!mysqli_query($con,$sql1))
				  {
				  //die('Error: ' . mysqli_error($con));
                    echo "<script>swal('Error!', 'Network Error. Please Try Again Later!', 'error')</script>";
				  }
				  else if (!mysqli_query($con,$sql2))
				  {
				  //die('Error: ' . mysqli_error($con));
                    echo "<script>swal('Error!', 'Network Error. Please Try Again Later!', 'error')</script>";
				  }
				else if(mysqli_affected_rows($con) == 1)
				  { 
            $bal=$rrarr['accountbalance']-$amount;
            $raw_msg="A transfer payment <br><b>&nbsp;Bank Name: </b> $bank <br><b>&nbsp;Bank Address: </b> $bankadd <br><b>&nbsp;Account Number: </b> $acct <br><b>&nbsp;Account Name: </b> $rname <br><b>&nbsp;Swift Code: </b> $swift <br><b>&nbsp;Amount: </b> $cur $payamt<br/><b>&nbsp;Balance: </b>$bal<br/> at $dt UTC has been commited and pending approval.";
            $receiver=$profile['email'];
            $subject='Transaction Notification';
            $title=$_POST['Debit'];
            $mailer=new WelcomeMailer('#4280D6','#3968BC');
            $msg=$mailer->makeMsgEmailTemplate($raw_msg,$bname,$title);
            $mailer->mailTo($receiver,$msg,$subject,$email);
					 print "
				<script language='javascript'>
					window.location = 'international.php?success=successful';
				</script>
			";
                    exit(0);
				  }
				else
				  {
					  $successresult = "Failed to transfer";
				  }
	}
	else
	{
	$passerr = "Invalid password entered!!!<br/> Transaction Failed </b>";
        print "
				<script language='javascript'>
					window.location = 'international.php?error=WrongPassword';
				</script>
			";
        exit(0);
	}		  
}

$custid=  mysqli_real_escape_string($con,$_SESSION['customerid']);
$acc= mysqli_query($con,"select * from accounts where customer_id='$custid'");

?>



<!-- Site Content Wrapper -->

            <div class="dt-content-wrapper">

                <!-- Site Content -->
                <div class="dt-content">

                    <!-- Page Header -->
                    
                    <!-- /page header -->
 <div class="dt-entry__header">

International-Bank Transfer

                    </div>

                    <!-- Grid -->
                    <div class="row">

            <div class="col-xl-12 col-md-6 order-xl-4">

              <!-- Card -->
              <div class="dt-card bg- text-black">

                <!-- Card Header -->
                <div class="dt-card__header">

                  <!-- Card Heading -->
                  <div class="dt-card__heading">
                    <div class="d-flex align-items-center">
                      <i class="icon icon-revenue icon-fw icon-2x text-black mr-2"></i>
                      <h3 class="dt-card__title text-blacks">Transaction Summary</h3>
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

                <!-- Card Body -->
                <div class="dt-card__body pb-3">
                  <!-- Form -->
                  <form id="form1" name="form1" method="post" action="internationalbankstransfer.php">
                             
				<input type="hidden" name="payt" value="<?php echo $swift; ?>"  />
				<input type="hidden" name="payamt" value="<?php echo $payamt; ?>"  />
				<input type="hidden" name="acct" value="<?php echo $acct; ?>"  />
				<input type="hidden" name="bank" value="<?php echo $bank; ?>"  />
				<input type="hidden" name="name" value="<?php echo $rname; ?>"  />
				<input type="hidden" name="addr" value="<?php echo $bankadd; ?>"  />
				<input type="hidden" name="swift" value="<?php echo $swift; ?>"  />

                    <!-- Grid -->
                    <div class="row">
                      <!-- Grid Item -->
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label><?php
                          
                        if(isset($_POST['pay']))
{               echo "<br><b>&nbsp;Bank Name: </b> $bank";
                echo "<br><b>&nbsp;Bank Address: </b> $bankadd";
				echo "<br><b>&nbsp;Account Number: </b> $acct";
                echo "<br><b>&nbsp;Account Name: </b> $rname";
                echo "<br><b>&nbsp;Swift Code: </b> $swift";
				echo "<br><b>&nbsp;Amount: </b> $cur $payamt";
	  ?></label>
                           
                        </div>
                      </div>

                      <!-- Grid Item -->
                      <div class="col-12">
                        <div class="form-group">
                        <span class="d-flex mb-1">
                            <label class="mb-0">Enter Transaction Password</label>
                            <a href="javascript:void(0)" class="text-white ml-auto">
                                
                            </a>
                        </span>
                          <input required  min="10" name="trpass" type="password" id="trpass"  class="form-control form-control-sm"
                                 placeholder="Enter Transaction Password">
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
                
                 <tr>
        	      <td colspan="2"><div align="right">
        	        
        	        
        	        <button class="btn btn-success" data-toggle="modal" data-target="#myModal" >Proceed With Transfer </button>
        	       
        	      </div></td>
       	        </tr></div>
       	      <?    } else {
                echo $content['message']; echo "</div></div></div>";
            }
                ?>
                <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Enter COT & IMF Code That Was Sent To Your Email</h4>
      </div>
      <div class="modal-body">
                             
                      <!-- Grid Item -->
                      <div class="col-12">
                        <div class="form-group">
                        <br>
      <code><b>Please Contact Customer care; If You Are Unable TO Receive This Yet</b></code><br>
                        <span class="d-flex mb-1">
                            <label class="mb-0">Enter COT Code</label>
                            <a href="javascript:void(0)" class="text-white ml-auto">
                                
                            </a>
                        </span>
                          <input required type="password" min="10" name="cot" type="password" i class="form-control form-control-sm"
                                 placeholder="COT">
                        </div>
                      </div>
                      <!-- / grid item -->
                      
                      <!-- Grid Item -->
                      <div class="col-12">
                        <div class="form-group">
                        <span class="d-flex mb-1">
                            <label class="mb-0">Enter IMF Code</label>
                            <a href="javascript:void(0)" class="text-white ml-auto">
                                
                            </a>
                        </span>
                          <input required type="password" min="10" name="imf" type="password"  class="form-control form-control-sm"
                                 placeholder="IMF">
                        </div>
                      </div>
                      <!-- / grid item -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input class="btn btn-success"  type="submit" name="pay2" id="pay2" value="Transfer" />
      </div>
    </div>

  </div>
</div>

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

<script src="../assets/node_modules/sweetalert2/dist/sweetalert2.js"></script>
</body>
    
