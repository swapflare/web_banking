<?php
session_start();
error_reporting(0);
include("../config/dbconfig.php");

header("Location: ../customer/register.php");
exit;

$query="SELECT * from system_settings"; 
 $result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
$bname=$row['bank_name'];
$email=$row['email'];
$currency=$row['currency'];
$phone=$row['phone'];
$creation=$row['creation'];
 }
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from <?php echo $bname;?>/register by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:12:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="1GxDEoVCk3c3B0iWiMb6u7M8g1y2LRT5e3OTScDC">
    <link rel="shortcut icon" href="public/uploads/media/file_1643068552.png">

    <title>STLBANK</title>

    <!-- Scripts -->
    <script src="public/auth/js/app.js" defer></script>

    <!-- Google font -->
	<link rel="preconnect" href="../fonts.gstatic.com/index.php">
	<link href="../fonts.googleapis.com/css260a0.css?family=Poppins:wght@300;400;600&amp;display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="public/auth/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/auth/css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
            <div class="card card-signin my-5 p-3">
				<div class="card-body">
				    <img class="logo" src="public/uploads/media/logo.png">

					<h5 class="text-center py-4">Create Your Account Now</h4>

                    <form method="POST" class="form-signup" autocomplete="off" action="https://<?php echo $bname;?>/register">
                        <input type="hidden" name="_token" value="1GxDEoVCk3c3B0iWiMb6u7M8g1y2LRT5e3OTScDC">
                        <div class="form-group row">
							<div class="col-md-12">
                                <input id="name" type="text" placeholder="Name" class="form-control" name="name" value="" required autofocus>

                                                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="E-Mail Address" class="form-control" name="email" value="" required>

                                                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6 mb-sm-3 mb-lg-0 pr-lg-1">
                                <select class="form-control select2 auto-select" data-selected="" name="country_code" required>
                                    <option value="">Country Code</option>
                                                                        <option value="93">Afghanistan (+93)</option>
                                                                        <option value="358">Aland Islands (+358)</option>
                                                                        <option value="355">Albania (+355)</option>
                                                                        <option value="213">Algeria (+213)</option>
                                                                        <option value="1684">AmericanSamoa (+1684)</option>
                                                                        <option value="376">Andorra (+376)</option>
                                                                        <option value="244">Angola (+244)</option>
                                                                        <option value="1264">Anguilla (+1264)</option>
                                                                        <option value="672">Antarctica (+672)</option>
                                                                        <option value="1268">Antigua and Barbuda (+1268)</option>
                                                                        <option value="54">Argentina (+54)</option>
                                                                        <option value="374">Armenia (+374)</option>
                                                                        <option value="297">Aruba (+297)</option>
                                                                        <option value="61">Australia (+61)</option>
                                                                        <option value="43">Austria (+43)</option>
                                                                        <option value="994">Azerbaijan (+994)</option>
                                                                        <option value="1242">Bahamas (+1242)</option>
                                                                        <option value="973">Bahrain (+973)</option>
                                                                        <option value="880">Bangladesh (+880)</option>
                                                                        <option value="1246">Barbados (+1246)</option>
                                                                        <option value="375">Belarus (+375)</option>
                                                                        <option value="32">Belgium (+32)</option>
                                                                        <option value="501">Belize (+501)</option>
                                                                        <option value="229">Benin (+229)</option>
                                                                        <option value="1441">Bermuda (+1441)</option>
                                                                        <option value="975">Bhutan (+975)</option>
                                                                        <option value="591">Plurinational State of Bolivia (+591)</option>
                                                                        <option value="387">Bosnia and Herzegovina (+387)</option>
                                                                        <option value="267">Botswana (+267)</option>
                                                                        <option value="55">Brazil (+55)</option>
                                                                        <option value="246">British Indian Ocean Territory (+246)</option>
                                                                        <option value="673">Brunei Darussalam (+673)</option>
                                                                        <option value="359">Bulgaria (+359)</option>
                                                                        <option value="226">Burkina Faso (+226)</option>
                                                                        <option value="257">Burundi (+257)</option>
                                                                        <option value="855">Cambodia (+855)</option>
                                                                        <option value="237">Cameroon (+237)</option>
                                                                        <option value="1">Canada (+1)</option>
                                                                        <option value="238">Cape Verde (+238)</option>
                                                                        <option value=" 345">Cayman Islands (+ 345)</option>
                                                                        <option value="236">Central African Republic (+236)</option>
                                                                        <option value="235">Chad (+235)</option>
                                                                        <option value="56">Chile (+56)</option>
                                                                        <option value="86">China (+86)</option>
                                                                        <option value="61">Christmas Island (+61)</option>
                                                                        <option value="61">Cocos (Keeling) Islands (+61)</option>
                                                                        <option value="57">Colombia (+57)</option>
                                                                        <option value="269">Comoros (+269)</option>
                                                                        <option value="242">Congo (+242)</option>
                                                                        <option value="243">The Democratic Republic of the Congo (+243)</option>
                                                                        <option value="682">Cook Islands (+682)</option>
                                                                        <option value="506">Costa Rica (+506)</option>
                                                                        <option value="225">Cote d&#039;Ivoire (+225)</option>
                                                                        <option value="385">Croatia (+385)</option>
                                                                        <option value="53">Cuba (+53)</option>
                                                                        <option value="357">Cyprus (+357)</option>
                                                                        <option value="420">Czech Republic (+420)</option>
                                                                        <option value="45">Denmark (+45)</option>
                                                                        <option value="253">Djibouti (+253)</option>
                                                                        <option value="1767">Dominica (+1767)</option>
                                                                        <option value="1849">Dominican Republic (+1849)</option>
                                                                        <option value="593">Ecuador (+593)</option>
                                                                        <option value="20">Egypt (+20)</option>
                                                                        <option value="503">El Salvador (+503)</option>
                                                                        <option value="240">Equatorial Guinea (+240)</option>
                                                                        <option value="291">Eritrea (+291)</option>
                                                                        <option value="372">Estonia (+372)</option>
                                                                        <option value="251">Ethiopia (+251)</option>
                                                                        <option value="500">Falkland Islands (Malvinas) (+500)</option>
                                                                        <option value="298">Faroe Islands (+298)</option>
                                                                        <option value="679">Fiji (+679)</option>
                                                                        <option value="358">Finland (+358)</option>
                                                                        <option value="33">France (+33)</option>
                                                                        <option value="594">French Guiana (+594)</option>
                                                                        <option value="689">French Polynesia (+689)</option>
                                                                        <option value="241">Gabon (+241)</option>
                                                                        <option value="220">Gambia (+220)</option>
                                                                        <option value="995">Georgia (+995)</option>
                                                                        <option value="49">Germany (+49)</option>
                                                                        <option value="233">Ghana (+233)</option>
                                                                        <option value="350">Gibraltar (+350)</option>
                                                                        <option value="30">Greece (+30)</option>
                                                                        <option value="299">Greenland (+299)</option>
                                                                        <option value="1473">Grenada (+1473)</option>
                                                                        <option value="590">Guadeloupe (+590)</option>
                                                                        <option value="1671">Guam (+1671)</option>
                                                                        <option value="502">Guatemala (+502)</option>
                                                                        <option value="44">Guernsey (+44)</option>
                                                                        <option value="224">Guinea (+224)</option>
                                                                        <option value="245">Guinea-Bissau (+245)</option>
                                                                        <option value="595">Guyana (+595)</option>
                                                                        <option value="509">Haiti (+509)</option>
                                                                        <option value="379">Holy See (Vatican City State) (+379)</option>
                                                                        <option value="504">Honduras (+504)</option>
                                                                        <option value="852">Hong Kong (+852)</option>
                                                                        <option value="36">Hungary (+36)</option>
                                                                        <option value="354">Iceland (+354)</option>
                                                                        <option value="91">India (+91)</option>
                                                                        <option value="62">Indonesia (+62)</option>
                                                                        <option value="98">Iran, Islamic Republic of Persian Gulf (+98)</option>
                                                                        <option value="964">Iraq (+964)</option>
                                                                        <option value="353">Ireland (+353)</option>
                                                                        <option value="44">Isle of Man (+44)</option>
                                                                        <option value="972">Israel (+972)</option>
                                                                        <option value="39">Italy (+39)</option>
                                                                        <option value="1876">Jamaica (+1876)</option>
                                                                        <option value="81">Japan (+81)</option>
                                                                        <option value="44">Jersey (+44)</option>
                                                                        <option value="962">Jordan (+962)</option>
                                                                        <option value="77">Kazakhstan (+77)</option>
                                                                        <option value="254">Kenya (+254)</option>
                                                                        <option value="686">Kiribati (+686)</option>
                                                                        <option value="850">Democratic People&#039;s Republic of Korea (+850)</option>
                                                                        <option value="82">Republic of South Korea (+82)</option>
                                                                        <option value="965">Kuwait (+965)</option>
                                                                        <option value="996">Kyrgyzstan (+996)</option>
                                                                        <option value="856">Laos (+856)</option>
                                                                        <option value="371">Latvia (+371)</option>
                                                                        <option value="961">Lebanon (+961)</option>
                                                                        <option value="266">Lesotho (+266)</option>
                                                                        <option value="231">Liberia (+231)</option>
                                                                        <option value="218">Libyan Arab Jamahiriya (+218)</option>
                                                                        <option value="423">Liechtenstein (+423)</option>
                                                                        <option value="370">Lithuania (+370)</option>
                                                                        <option value="352">Luxembourg (+352)</option>
                                                                        <option value="853">Macao (+853)</option>
                                                                        <option value="389">Macedonia (+389)</option>
                                                                        <option value="261">Madagascar (+261)</option>
                                                                        <option value="265">Malawi (+265)</option>
                                                                        <option value="60">Malaysia (+60)</option>
                                                                        <option value="960">Maldives (+960)</option>
                                                                        <option value="223">Mali (+223)</option>
                                                                        <option value="356">Malta (+356)</option>
                                                                        <option value="692">Marshall Islands (+692)</option>
                                                                        <option value="596">Martinique (+596)</option>
                                                                        <option value="222">Mauritania (+222)</option>
                                                                        <option value="230">Mauritius (+230)</option>
                                                                        <option value="262">Mayotte (+262)</option>
                                                                        <option value="52">Mexico (+52)</option>
                                                                        <option value="691">Federated States of Micronesia (+691)</option>
                                                                        <option value="373">Moldova (+373)</option>
                                                                        <option value="377">Monaco (+377)</option>
                                                                        <option value="976">Mongolia (+976)</option>
                                                                        <option value="382">Montenegro (+382)</option>
                                                                        <option value="1664">Montserrat (+1664)</option>
                                                                        <option value="212">Morocco (+212)</option>
                                                                        <option value="258">Mozambique (+258)</option>
                                                                        <option value="95">Myanmar (+95)</option>
                                                                        <option value="264">Namibia (+264)</option>
                                                                        <option value="674">Nauru (+674)</option>
                                                                        <option value="977">Nepal (+977)</option>
                                                                        <option value="31">Netherlands (+31)</option>
                                                                        <option value="599">Netherlands Antilles (+599)</option>
                                                                        <option value="687">New Caledonia (+687)</option>
                                                                        <option value="64">New Zealand (+64)</option>
                                                                        <option value="505">Nicaragua (+505)</option>
                                                                        <option value="227">Niger (+227)</option>
                                                                        <option value="234">Nigeria (+234)</option>
                                                                        <option value="683">Niue (+683)</option>
                                                                        <option value="672">Norfolk Island (+672)</option>
                                                                        <option value="1670">Northern Mariana Islands (+1670)</option>
                                                                        <option value="47">Norway (+47)</option>
                                                                        <option value="968">Oman (+968)</option>
                                                                        <option value="92">Pakistan (+92)</option>
                                                                        <option value="680">Palau (+680)</option>
                                                                        <option value="970">Palestinian Territory (+970)</option>
                                                                        <option value="507">Panama (+507)</option>
                                                                        <option value="675">Papua New Guinea (+675)</option>
                                                                        <option value="595">Paraguay (+595)</option>
                                                                        <option value="51">Peru (+51)</option>
                                                                        <option value="63">Philippines (+63)</option>
                                                                        <option value="872">Pitcairn (+872)</option>
                                                                        <option value="48">Poland (+48)</option>
                                                                        <option value="351">Portugal (+351)</option>
                                                                        <option value="1939">Puerto Rico (+1939)</option>
                                                                        <option value="974">Qatar (+974)</option>
                                                                        <option value="40">Romania (+40)</option>
                                                                        <option value="7">Russia (+7)</option>
                                                                        <option value="250">Rwanda (+250)</option>
                                                                        <option value="262">Reunion (+262)</option>
                                                                        <option value="590">Saint Barthelemy (+590)</option>
                                                                        <option value="290">Saint Helena (+290)</option>
                                                                        <option value="1869">Saint Kitts and Nevis (+1869)</option>
                                                                        <option value="1758">Saint Lucia (+1758)</option>
                                                                        <option value="590">Saint Martin (+590)</option>
                                                                        <option value="508">Saint Pierre and Miquelon (+508)</option>
                                                                        <option value="1784">Saint Vincent and the Grenadines (+1784)</option>
                                                                        <option value="685">Samoa (+685)</option>
                                                                        <option value="378">San Marino (+378)</option>
                                                                        <option value="239">Sao Tome and Principe (+239)</option>
                                                                        <option value="966">Saudi Arabia (+966)</option>
                                                                        <option value="221">Senegal (+221)</option>
                                                                        <option value="381">Serbia (+381)</option>
                                                                        <option value="248">Seychelles (+248)</option>
                                                                        <option value="232">Sierra Leone (+232)</option>
                                                                        <option value="65">Singapore (+65)</option>
                                                                        <option value="421">Slovakia (+421)</option>
                                                                        <option value="386">Slovenia (+386)</option>
                                                                        <option value="677">Solomon Islands (+677)</option>
                                                                        <option value="252">Somalia (+252)</option>
                                                                        <option value="27">South Africa (+27)</option>
                                                                        <option value="211">South Sudan (+211)</option>
                                                                        <option value="500">South Georgia and the South Sandwich Islands (+500)</option>
                                                                        <option value="34">Spain (+34)</option>
                                                                        <option value="94">Sri Lanka (+94)</option>
                                                                        <option value="249">Sudan (+249)</option>
                                                                        <option value="597">Suricountry (+597)</option>
                                                                        <option value="47">Svalbard and Jan Mayen (+47)</option>
                                                                        <option value="268">Swaziland (+268)</option>
                                                                        <option value="46">Sweden (+46)</option>
                                                                        <option value="41">Switzerland (+41)</option>
                                                                        <option value="963">Syrian Arab Republic (+963)</option>
                                                                        <option value="886">Taiwan (+886)</option>
                                                                        <option value="992">Tajikistan (+992)</option>
                                                                        <option value="255">Tanzania (+255)</option>
                                                                        <option value="66">Thailand (+66)</option>
                                                                        <option value="670">Timor-Leste (+670)</option>
                                                                        <option value="228">Togo (+228)</option>
                                                                        <option value="690">Tokelau (+690)</option>
                                                                        <option value="676">Tonga (+676)</option>
                                                                        <option value="1868">Trinidad and Tobago (+1868)</option>
                                                                        <option value="216">Tunisia (+216)</option>
                                                                        <option value="90">Turkey (+90)</option>
                                                                        <option value="993">Turkmenistan (+993)</option>
                                                                        <option value="1649">Turks and Caicos Islands (+1649)</option>
                                                                        <option value="688">Tuvalu (+688)</option>
                                                                        <option value="256">Uganda (+256)</option>
                                                                        <option value="380">Ukraine (+380)</option>
                                                                        <option value="971">United Arab Emirates (+971)</option>
                                                                        <option value="44">United Kingdom (+44)</option>
                                                                        <option value="1">United States (+1)</option>
                                                                        <option value="598">Uruguay (+598)</option>
                                                                        <option value="998">Uzbekistan (+998)</option>
                                                                        <option value="678">Vanuatu (+678)</option>
                                                                        <option value="58">Venezuela (+58)</option>
                                                                        <option value="84">Vietnam (+84)</option>
                                                                        <option value="1284">British Virgin Islands (+1284)</option>
                                                                        <option value="1340">U.S. Virgin Islands (+1340)</option>
                                                                        <option value="681">Wallis and Futuna (+681)</option>
                                                                        <option value="967">Yemen (+967)</option>
                                                                        <option value="260">Zambia (+260)</option>
                                                                        <option value="263">Zimbabwe (+263)</option>
                                                                    </select>
                            </div>

							<div class="col-lg-6 pl-lg-0">
                                <input id="phone" type="text" placeholder="Phone" class="form-control" name="phone" value="" required>

                                                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                                                            </div>
                        </div>

                        <div class="form-group row">
                           <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                            </div>
                        </div>

						<div class="form-group row mt-5">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary btn-login">
								Create My Account
                                </button>
							</div>
						</div>
                        <div class="form-group row mt-5">
							<div class="col-md-12 text-center">
							   Already Have An Account?
                               <a href="login.php">Log In Here</a>
							</div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>

	</body>

<!-- Mirrored from <?php echo $bname;?>/register by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:12:15 GMT -->
</html>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/629251627b967b117991bb88/1g45orr9e';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->