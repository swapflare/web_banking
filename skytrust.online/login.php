<?php
session_start();
error_reporting(0);
include("../config/dbconfig.php");

header("Location: ../customer/login.php");
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

<!-- Mirrored from <?php echo $bname;?>/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:12:16 GMT -->
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
        <div class="col-md-5">
            <div class="card card-signin p-3 my-5">
                <div class="card-body">
					<img class="logo" src="public/uploads/media/logo.png">

					<h5 class="text-center py-4">Login To Your Account</h4>

                    
					
					<form method="POST" class="form-signin" action="https://<?php echo $bname;?>/login">
                        <input type="hidden" name="_token" value="1GxDEoVCk3c3B0iWiMb6u7M8g1y2LRT5e3OTScDC">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email" required autofocus>

                                                            </div>
                        </div>

                        <div class="form-group row">
						    <div class="col-md-12">

								<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                                            </div>
                        </div>

						<div class="text-center">
							<div class="custom-control custom-checkbox mb-3">
								<input type="checkbox" name="remember" class="custom-control-input" id="remember" >
								<label class="custom-control-label" for="remember">Remember Me</label>
							</div>
						</div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>

                                
                                
                                								<a class="btn btn-link btn-register" href="register.php">
									Create Account
								</a>
                                
                            </div>
                        </div>


						<div class="form-group row mt-3">
                            <div class="col-md-12">
								<a class="btn-link" href="password/reset.php">
									Forgot Password?
								</a>
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

<!-- Mirrored from <?php echo $bname;?>/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:12:17 GMT -->
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
