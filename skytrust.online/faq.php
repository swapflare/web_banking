<?php
session_start();
error_reporting(0);
include("../config/dbconfig.php");


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


<!-- Mirrored from <?php echo $bname;?>/faq by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:12:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $bname;?> Online Bank 
</title>
<meta name="google-site-verification" content="hFVZKHFSbK4gybZRqBdIZg3JLGS4SDvXbKMUQykXa24" />
<link rel="stylesheet" type="text/css" href="ui/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="ui/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="ui/css/envas-icons.css">
<link rel="stylesheet" type="text/css" href="ui/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="ui/css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="ui/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="ui/css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="ui/css/settings.css">
<link rel="stylesheet" type="text/css" href="ui/css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="ui/css/loader.css">
<link rel="stylesheet" type="text/css" href="ui/css/styleac27ac27ac27ac27.css?p=1587912441">
<link rel="icon" href="ui/images/favicon.png">

</head>
<body>

<div class="loader">
  <div class="cssload-loader">
    <div class="cssload-inner cssload-one">
    </div>
    <div class="cssload-inner cssload-two">
    </div>
    <div class="cssload-inner cssload-three">
    </div>
  </div>
</div>

<!--Loader-->
<div class="loader">
  <div class="cssload-loader">
    <div class="cssload-inner cssload-one"></div>
    <div class="cssload-inner cssload-two"></div>
    <div class="cssload-inner cssload-three"></div>
  </div>
</div>
<!--Loader Ends -->

<header class="layout_light">
  <nav class="navbar navbar-default navbar-sticky  bootsnav">
    <div class="container">
      <!-- Start Header Navigation -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
        <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand alo" href="index.php"> <span class="blue_t"><strong><?php echo $bname;?></strong></span></a>
      </div><!-- End Header Navigation -->
    
    
      <!-- nav links -->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="slideInUp" data-out="fadeOut">
    <li class=" ">
                <a href="home.php" class="border">Home</a>
            </li>
            <li class=" "><a href="about.php" class="border">About Us</a></li>
            
            <li class=" ">
                <a href="faq.php" class="border">FAQ
              </a>
            </li>
             <li class=" ">
                <a href="rules.php" class="border">Terms
              </a>
            </li>
            <li class=" ">
              <a href="support.php" class="border">Contact Us
              </a>
            </li>
            <li class=" ">
                <a href="login.php" class="border">Login
              </a>
            </li> 
            
            <li class=" ">
                <a href="register.php" class="border">Register
              </a>
            </li> 
          </ul>
      </div>
    </div>
  </nav>
</header>

<section class="page_header" style="background-position: 50% -44px;">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
       <p>How it works</p>
       <h1 class="text-uppercase">faq’s</h1>
      </div>
    </div>
  </div>
</section>
<div class="page_linker">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
       <ul class="breadcrumb">
        <li><a href="home.php"><i class="icon-home6"></i>Home</a></li>
        <li class="active">faq’s</li>
       </ul>
      </div>
    </div>
  </div>
</div>
<section id="faq" class="padding-top padding-bottom-half">
  <h3 class="hidden"> hidden</h3>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="accordion-container">
            <div class="accordion_title">
              <a href="javascript:void(0)" class="active">
                 What is this website about? Is this an ICO?<i class="fa fa-minus"></i>
              </a>
              <div class="content" style="display:block;">
                  <p class="bottom20">No. This is not an Initial Coin Offering. We believe that ICO's should be approached with caution as the majority of "Alt coins" do not offer any benefits to more established crypto currencies such as Bitcoin, Ethereum, etc.  <?php echo $bname;?>  is a managed cryptocurrency trading platform with user friendly interface and attractive offer.</p>
              </div>
            </div>
            <div class="accordion_title">
              <a href="javascript:void(0)">What Markets do you trade?<i class="fa fa-plus"></i></a>
              <div class="content">
                <p class="bottom20">Tradeable Coins: Bitcoin, Litecoin, Ethereum, Bitcoin Cash and XRP.</p>
              </div>
            </div>
            <div class="accordion_title">
              <a href="javascript:void(0)">What is the risk for my investment?<i class="fa fa-plus"></i></a>
              <div class="content">
                <p class="bottom20">There is no risk whatsoever. Just invest and enjoy the financial freedom..</p>
              </div>
            </div>
            <div class="accordion_title">
              <a href="javascript:void(0)">How can I access the account?<i class="fa fa-plus"></i></a>
              <div class="content">
                <p class="bottom20">If you are a registered user of  <?php echo $bname;?> , please enter your username and password in the appropriate fields at the top of the website and click the "Login to Account" button. You will be redirected to your account automatically as soon as you have done the above.</p>
              </div>
            </div>
            <div class="accordion_title">
              <a href="javascript:void(0)">Are there any limits for an investment amount? How can I keep my account safe?<i class="fa fa-plus"></i></a>
              <div class="content">
                <p class="bottom20">We take all security measures to protect your account and keep it safe from third parties intrusion.</p>
              </div>
            </div>
            <div class="accordion_title">
              <a href="javascript:void(0)">What is the process of investing?<i class="fa fa-plus"></i></a>
              <div class="content">
                <p class="bottom20">To make investments you should register with  <?php echo $bname;?> , create an account and then you can make your deposit. All the investments are made in your personal account after login</p>
              </div>
            </div>
          </div>
      </div>
      <div class="col-sm-6">
        <div class="accordion-container">
            <div class="accordion_title">
              <a href="javascript:void(0)" class="active">
                I forgot my password. What should I do?
                <i class="fa fa-minus"></i>
              </a>
              <div class="content" style="display:block;">
                <p class="bottom20">Go to Password Reminder section, enter your registration e-mail address and follow the instructions.</p>
              </div>
            </div>
            <div class="accordion_title">
              <a href="javascript:void(0)">How to create a new account?<i class="fa fa-plus"></i></a>
              <div class="content">
                <p class="bottom20">It's not difficult at all. Click on the following button, fill in the registration form and create a new account.</p>
              </div>
            </div>
            <div class="accordion_title">
              <a href="javascript:void(0)">May I create more than one account?<i class="fa fa-plus"></i></a>
              <div class="content">
                <p class="bottom20">No. you are allowed to create only one account. For special situations please contact our Customer Support.</p>
              </div>
            </div>

          </div>
      </div>
    </div>
  </div>
</section>



  
<div class="container bg_contact bg_one border_radius wow bounceInUp" data-wow-delay="500ms">
  <div class="row ">
    <div class="col-sm-4">
      <div class="contact_inner">
        <i class="icon-phone4"></i>
        <h5><strong>Email us : <a href="href%3d.php"mailto:<?php echo $email;?>"><span class="__cf_email__" data-cfemail="aedddbdedec1dcdaeeddc5d7dadcdbddda80c1c0c2c7c0cb">[email&#160;protected]</span></a></strong></h5>
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="contact_inner">
        <i class="icon-icons20"></i>
        <h5><strong>Mon - Sun 8.00</strong></h5>
        <h5></h5>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="contact_inner">
        <i class="icon-location"></i>
        <h5><strong>Bank Address: 261 NW 46TH ct CITY FL 33309</h5>
      </div>
    </div>
  </div>
</div>
  <footer class="footer_top padding-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 footer_panel heading_space">
               <a class="navbar-brand" href="home.php">
                <img src="img/pplogo.png" width="100px"height="25px" />
                </a>
        <p class="bottom30"><?php echo $bname;?> is an online banking company, officially registered in USA, it was launched in October 2008. The company has direct contracts with best banking system around the world that guarantees the best services and ensures security and best banking system.</p>
        <!--ul class="social_icon heading_top">
          <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#." class="twitter"><i class="icon-twitter4"></i></a></li>
          <li><a href="#." class="dribble"><i class="icon-dribbble5"></i></a></li>
          <li><a href="#." class="instagram"><i class="icon-instagram"></i></a></li>
          <li><a href="#." class="vimo"><i class="icon-vimeo4"></i></a></li>
        </ul-->
      </div>
      <div class="col-sm-4 footer_panel heading_space">
        <h3 class="heading bottom30">Useful <span class="blue_t">Links</span></h3>
        <ul class="links">
            <li><a href="home.php"><i class="icon-chevron-small-right"></i>Home</a></li>
            <li><a href="about.php"><i class="icon-chevron-small-right"></i>Company</a></li>
            <li><a href="rules.php"><i class="icon-chevron-small-right"></i>Terms</a></li>
            <li><a href="faq.php"><i class="icon-chevron-small-right"></i>FAQ</a></li>
            
            <li><a href="support.php"><i class="icon-chevron-small-right"></i>Contact Us</a></li>
          <li><a href="login.php"><i class="icon-chevron-small-right"></i>Start Investing</a></li>
        </ul>
      </div>
      <div class="col-sm-4 footer_panel heading_space">
        <h3 class="bottom30 heading"> Live <span class="blue_t">Chart</span></h3>
      
        <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="ui/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        
        <script type="text/javascript">
								baseUrl = "https://widgets.cryptocompare.com/";
								var scripts = document.getElementsByTagName("script");
								var embedder = scripts[ scripts.length - 1 ];
								var cccTheme = {"General":{"background":"#121212","borderColor":"#000"},"Tabs":{"background":"#000","color":"#FFF","borderColor":"#333","activeBackground":"#333","activeColor":"#FFF"},"Row":{"color":"#FFF","borderColor":"#585858"},"Trend":{"colorUp":"#78dc3c","colorDown":"#ee3737","colorUnchanged":"#3791ee"},"Conversion":{"background":"#000","color":"#CCC"}};
								(function (){
								var appName = encodeURIComponent(window.location.hostname);
								if(appName==""){appName="local";}
								var s = document.createElement("script");
								s.type = "text/javascript";
								s.async = true;
								var theUrl = baseUrl+'serve/v1/coin/multi?fsyms=BTC,ETH,XMR&tsyms=USD,EUR,CNY,GBP';
								s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
								embedder.parentNode.appendChild(s);
								})();
							</script>
							
      </div>
    </div>
  </div>
</footer>
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
          <p>Copyright &copy; <?php echo $creation;?> <a href="#."><?php echo $bname;?></a>. all rights reserved.</p>
      </div>
    </div>
  </div>
</div>
<script src="ui/js/jquery-2.2.3.js"></script>
<script src="ui/js/bootstrap.min.js"></script>
<script src="ui/js/jquery.parallax-1.1.3.js"></script>
<script src="ui/js/jquery.appear.js"></script>
<script src="ui/js/jquery-countTo.js"></script>
<script src="ui/js/bootsnav.js"></script>
<script src="ui/js/jquery.cubeportfolio.min.js"></script>
<script src="ui/js/owl.carousel.min.js"></script>
<script src="ui/js/viedobox_video.js"></script>
<script src="ui/js/jquery.themepunch.tools.min.js"></script>
<script src="ui/js/jquery.themepunch.revolution.min.js"></script>
<script src="ui/js/jquery.themepunch.revolution.min.js"></script>
<script src="ui/js/revolution.extension.layeranimation.min.js"></script>
<script src="ui/js/revolution.extension.navigation.min.js"></script>
<script src="ui/js/revolution.extension.parallax.min.js"></script>
<script src="ui/js/revolution.extension.slideanims.min.js"></script>
<script src="ui/js/revolution.extension.video.min.js"></script>
<script src="ui/js/wow.min.js"></script>
<script src="ui/js/functionsac1dac1dac1dac1d.js?u=1587912441"></script>


</body>

<script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "bc79c7465b67de6f35970335763e879fce9eb583db4b1914970a8fcaa9dc0d498287639aa37fff6806de679d0ed0a645", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="../salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>

<!-- Mirrored from <?php echo $bname;?>/faq by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:12:22 GMT -->
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