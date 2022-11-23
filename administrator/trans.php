<?php
session_start();
error_reporting(0);
include("../config/dbconfig.php");

include("header.php");

if(!($_SESSION["adminid"]))
{
		header("Location:login.php");
}
$dt = date("Y-m-d h:i:s");

$acc= mysqli_query($con,"select * from accounts where customerid='".$_GET['custid']."'");
$custid=$_GET['custid'];
$results = mysqli_query($con,"SELECT * FROM customers where customerid='$_GET[custid]'");
?>
<!-- Site Content Wrapper -->

              <!-- Site Content Wrapper -->
            <div class="dt-content-wrapper">

                <!-- Site Content -->
                <div class="dt-content">

                    <!-- Page Header -->
                    <div class="dt-page__header">
                        <h1 class="dt-page__title">Create New Transaction</h1>
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
                                    <h3 class="dt-entry__title">Create Transaction</h3>
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

                                        
    <blockquote>
      
  <? 
  if(isset($_REQUEST['create']))
{
    $_status=$_REQUEST['paymentstat']=='active'?1:0;
    $payeeid=strtolower($_REQUEST['type'])=='credit'?0:$_REQUEST['custid'];
    $receiveid=strtolower($_REQUEST['type'])=='credit'?$_REQUEST['custid']:$_REQUEST['receiveid'];
     mysqli_query($con,"INSERT INTO transactions (cashier,type,paymentdate,payeeid,receiveid,amount,charged,paymentstat) VALUES ('$_REQUEST[cashier]','$_REQUEST[type]','$_REQUEST[paymentdate]','$payeeid','$receiveid','$_REQUEST[amount]','$_REQUEST[charged]','$_REQUEST[paymentstat]')");
     mysqli_query($con,"INSERT INTO saved (userid,amount,status) VALUES ('$_REQUEST[custid]','$_REQUEST[amount]',$_status)");
                   //$query = "update accounts set accountbalance = accountbalance + '$_REQUEST[amount]' WHERE customerid = '$_REQUEST[custid]'";
                      //mysqli_query($con,$query);
                      echo "<script>swal('Successful!', 'Transaction Successfully Added!', 'success')</script>";

  
 
}
if(isset($_REQUEST['credit']))
{
     mysqli_query($con,"INSERT INTO transactions (cashier,type,paymentdate,payeeid,receiveid,amount,charged,paymentstat) VALUES ('$_SESSION[adminid]','Credit','$dt',0,'$_REQUEST[custid]','$_REQUEST[amount]','$_REQUEST[custid]','active')");
     mysqli_query($con,"INSERT INTO saved (userid,amount,status) VALUES ('$_REQUEST[custid]','$_REQUEST[amount]','active')");
                   $query = "update accounts set accountbalance = accountbalance + '$_REQUEST[amount]' WHERE customerid = '$_REQUEST[custid]'";
                      mysqli_query($con,$query);
                      echo "<script>swal('Successful!', 'Account Successfully Credited!', 'success')</script>";
  
 
}
if(isset($_REQUEST['debit']))
{  mysqli_query($con,"INSERT INTO transactions (cashier,type,paymentdate,charged,amount,paymentstat) VALUES ('$_SESSION[adminid]','Debit','$dt','$_REQUEST[custid]','$_REQUEST[amount]','active')");
   
      $query = "update accounts set accountbalance = accountbalance - '$_REQUEST[amount]' WHERE customerid = '$_REQUEST[custid]'";
    mysqli_query($con,$query);
     echo "<script>swal('Successful!', 'Account Successfully Debited!', 'success')</script>";
  
 
}
if(isset($_REQUEST['transfer']))
{ 
    mysqli_query($con,"INSERT INTO transfers (sender,receiver,name,bank,amount,status,address, swift,date) VALUES ('$_REQUEST[custid]','$_POST[acct]','$_POST[name]','$_POST[bank]','$_POST[pay_amt]','$_POST[status]','$_POST[addr]','$_POST[swift]','$_POST[date]')");
    echo "<script>swal('Successful!', 'Transfer Successful!', 'success')</script>";
}


while($arrow = mysqli_fetch_array($results))
{
	$custname = $arrow[firstname]." ".$arrow['lastname'];
	$ifsccode=$arrow[ifsccode];
	$loginid=$arrow[loginid];
	$accstatus=$arrow[accstatus];
	$city=$arrow[city];
    $state=$arrow[state];
	$country=$arrow[country];
    $accopendate=$arrow[accopendate];
    $lastlogin=$arrow[lastlogin];
}
$resultsd = mysqli_query($con,"SELECT * FROM accounts where customerid='$_GET[custid]'");
mysqli_num_rows($resultsd);
?>

    </blockquote>
    <table id="data-table" class="table table-striped table-bordered table-hover">
                                          <tr>
        <th colspan="5" scope="col"><strong>CUSTOMER ACCOUNTS</strong></th>
        </tr>
      <tr>
        <th width="100" scope="col"><strong>ACCOUNT NO</strong></th>
        <th width="75" scope="col"><strong>STATUS</strong></th>
        <th width="90" scope="col"><strong>OPEN DATE</strong></th>
        <th width="90" scope="col"><strong>ACCOUNT TYPE</strong></th>
        <th width="85" scope="col"><strong>BALANCE</strong></th>
      </tr>
      <?php
	 while($arrow=mysqli_fetch_array($resultsd))
	 {
	 ?>
        <tr>
        <td>&nbsp;<?php echo $arrow[accno];?></td>
        <td>&nbsp;<?php echo $arrow[accstatus];?></td>
        <td>&nbsp;<?php echo $arrow[accopendate];?></td>
        <td>&nbsp;<?php echo $arrow[accounttype];?></td>
        <td>&nbsp;<?php echo " $cur $arrow[accountbalance]";?></td>
      </tr>
     <?php
     }
	 ?>
</table>
       <p>&nbsp;</p>

                                         <tr>
        	      <td colspan="2"><div align="right">
                  <input type="button" class="btn btn-secondary" data-toggle="modal" data-target="#transferModal" type="submit" value="Create Transfer" name="Del">  <input type="button" class="btn btn-secondary" data-toggle="modal" data-target="#creditModal" type="submit" value="Credit Account" name="Del">  <input type="button" class="btn btn-secondary" data-toggle="modal" data-target="#debitModal" type="submit" value="Debit Account"> <input type="button" class="btn btn-secondary" data-toggle="modal" data-target="#transModal" type="submit" value="Create Transaction" name="Del"></tr></td></div>
                                    </div>
                                    <!-- /tables -->
  </form>
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
<div id="creditModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Credit User</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <form method="post" action="">
      <input type="hidden" value="<?php echo $custid ?>" name="custid">                 
       <label>Enter Amount To Credit</label>
                          <input type="number" name="amount"  class="form-control">
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      <input name="credit" type="submit" value="Credit" class="btn btn-secondary" >
      </div>
    </div></form>

  </div>
</div>


<!-- Modal -->
<div id="debitModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Debit User</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <form method="post" action="">
      <input type="hidden" value="<?php echo $custid ?>" name="custid">                 
       <label>Enter Amount To Debit</label>
                          <input type="number" name="amount"  class="form-control">
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      <input name="debit" type="submit" value="Debit" class="btn btn-secondary" >
      </div>
    </div></form>

  </div>
</div>

<!-- Modal -->
<div id="transModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Transaction</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <form method="post" action="">
      <input type="hidden" value="<?php echo $custid ?>" name="custid">                 
       <label>Enter Amount To Credit</label>
                          <input type="number" name="amount"  class="form-control">
                        </div>
        <div class="form-group">                
            <label>Cashier</label>
            <input type="text" name="cashier"  class="form-control" value='<?php echo $_SESSION['adminid'];?>'>
        </div>
        <div class="form-group">                
            <label>Type</label>
            <select name="type" class="custom-select custom-select-sm">
                <option>credit</option>
                <option>debit</option>
                <option>transfer</option>
            </select>
        </div>
        <div class="form-group">                
            <label>Receiver(*Debit)</label>
            <input type="text" name="receiveid"  class="form-control" value=''>
        </div>
        <div class="form-group">                
            <label>Charge</label>
            <input type="number" name="charged"  class="form-control" value=''>
        </div>
        <div class="form-group">                
            <label>Date(yyyy-mm-dd h:m:s)</label>
            <input type="text" name="paymentdate"  class="form-control" value='<?php echo $dt;?>'>
        </div>
        <div class="form-group">                
            <label>Status</label>
            <select name="paymentstat" class="custom-select custom-select-sm">
                <option>active</option>
                <option>inactive</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      <input name="create" type="submit" value="Create" class="btn btn-secondary" >
      </div>
    </div></form>

  </div>
</div>

<!-- Modal -->
<div id="transferModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Transfer</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <form method="post" action="">
      <input type="hidden" value="<?php echo $custid ?>" name="custid">                 
       <label>Country</label>
       <label>Country</label>
                          <select name="addr" id="country" class="custom-select custom-select-sm">
               <option value="">Select</option>
 <option value="Afganistan" selected>Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
                </select>
                         
                        </div>
        <div class="form-group">                
            <label>Receiver's Bank</label>
            <input required name="bank" class="form-control">
        </div>
        <div class="form-group">                
            <label>Receiver's Name</label>
            <input required name="name" id="name" class="form-control">
        </div>
        <div class="form-group">                
            <label>Receiver's Bank Account no</label>
            <input type='number' required name="acctno" id="acctno" class="form-control">
        </div>
        <div class="form-group">                
            <label>SWIFT/ABA ROUTING NO</label>
            <input type='number' required name="swift" id="swift" class="form-control">
        </div>
        <div class="form-group">                
            <label>Select Sender's Account No</label>
            <select required name="acct" id="acct" class="custom-select custom-select-sm">
                           <?php  while($rowsacc = mysqli_fetch_array($acc))
						{
							echo "<option value='$rowsacc[accno]'>$rowsacc[accno] </option>";
						}
						?>
            </select>
        </div>
        <div class="form-group">           
            <label>Amount</label>
            <input required type="number" min="10" name="pay_amt" id="pay_amt" class="form-control form-control-sm" placeholder="Amount">
        </div>

        <div class="form-group">                
            <label>Date(yyyy-mm-dd h:m:s)</label>
            <input type="text" name="date"  class="form-control" value='<?php echo $dt;?>'>
        </div>
        <div class="form-group">                
            <label>Status</label>
            <select name="status" class="custom-select custom-select-sm">
                <option value="1">active</option>
                <option value="0">inactive</option>
            </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      <input name="transfer" type="submit" value="Transfer" class="btn btn-secondary" >
      </div>
    </div></form>

  </div>
</div>

<?php include'footer.php' ?>
    
<script src="../assets/node_modules/datatables.net/js/jquery.dataTables.js"></script>
<script src="../assets/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
<script src="../assets/js/custom/data-table.js"></script>
