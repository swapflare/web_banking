
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


<!-- Mirrored from <?php echo $bname;?>/rules by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:12:22 GMT -->
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
       <p>Terms</p>
       <h1 class="text-uppercase">Terms & Condition</h1>
      </div>
    </div>
  </div>
</section>
<div class="page_linker">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
       <ul class="breadcrumb">
        <li><a href="indexbc14.php?a=home"><i class="icon-home6"></i>Home</a></li>
        <li class="active">Terms’s</li>
       </ul>
      </div>
    </div>
  </div>
</div>


<section id="faq" class="padding-top padding-bottom-half">
  <h3 class="hidden"> hidden</h3>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
          
          
          <p class="bottom20">
							These terms and conditions govern your use of <?php echo $bname;?>’s website; by using this website, you accept these terms and conditions in full.  If you disagree with these terms and conditions or any part of these terms and conditions, you must not use this website.

 </p>
							<p class="bottom20">
							[You must be at least [18] years of age to use this website.  By using this website [and by agreeing to these terms and conditions] you warrant and represent that you are at least [18] years of age.]

 </p>
							<p class="bottom20">
							[This website uses cookies.  By using this website and agreeing to these terms and conditions, you consent to our use of cookies in accordance with the terms of Ares Investors [privacy policy / cookies policy].]

 </p>
							<p class="bottom20">
							<strong>License to use website

</strong>

 </p>
							<p class="bottom20">
							Unless otherwise stated, <?php echo $bname;?> and/or its licensors own the intellectual property rights in the website and material on the website.  Subject to the license below, all these intellectual property rights are reserved.

 </p>
							<p class="bottom20">
							<strong>Acceptable use

</strong>

 </p>
							<p class="bottom20">
							You must not use this website in any way that causes, or may cause, damage to the website or impairment of the availability or accessibility of the website; or in any way which is unlawful, illegal, fraudulent or harmful purpose.


 </p>
							<p class="bottom20">
							You must not conduct any systematic or automated data collection activities (including without limitation scraping, data mining, data extraction and data harvesting) on or in relation to this website without <?php echo $bname;?>’s express written consent.


 </p>
							<p class="bottom20">
							[Access to certain areas of this website is restricted.]  We reserve the right to restrict access to areas of this website, or indeed this entire website, at Ares Investors discretion.

 </p>
							<p class="bottom20">
							If <?php echo $bname;?> provide you with a user ID and password to enable you to access restricted areas of this website or other content or services, you must ensure that the user ID and password are kept confidential.

 </p>
							<p class="bottom20">
						<?php echo $bname;?>  may disable your user ID and password in Ares sole discretion without notice or explanation.]

 </p>
							<p class="bottom20">
							<strong>User content </strong>

 </p>
							<p class="bottom20">
							In these terms and conditions, “your user content” means material (including without limitation text, images) that you submit to this website, for whatever purpose.

 </p>
							<p class="bottom20">
							Your user content must not be illegal or unlawful, must not infringe any third party's legal rights, and must not be capable of giving rise to legal action whether against you or <?php echo $bname;?> or a third party (in each case under any applicable law).

 </p>
							<p class="bottom20">
							You must not submit any user content to the website that is or has ever been the subject of any threatened or actual legal proceedings or other similar complaint.

 </p>
							<p class="bottom20">
						<?php echo $bname;?>  reserve the right to edit or remove any material submitted to this website, or stored on [NAME'S] servers, or hosted or published upon this website.

 </p>
							<p class="bottom20">
							[Notwithstanding <?php echo $bname;?> right under these terms and conditions in relation to user content, <?php echo $bname;?> does not undertake to monitor the submission of such content to, or the publication of such content on, this website.]

 </p>
							<p class="bottom20">
							<strong>Unenforceable provisions

</strong>

 </p>
							<p class="bottom20">
							If any provision of this website disclaimer is, or is found to be, unenforceable under applicable law, that will not affect the enforceability of the other provisions of this website disclaimer.

 </p>
							<p class="bottom20">
							<strong>Indemnity</strong>

 </p>
							<p class="bottom20">
							You hereby indemnify <?php echo $bname;?> and undertake to keep <?php echo $bname;?> indemnified against any losses, damages, costs, liabilities and expenses (including without limitation legal expenses and any amounts paid by Ares Investors to a third party in settlement of a claim or dispute on the advice of <?php echo $bname;?> legal advisers) incurred or suffered by <?php echo $bname;?> arising out of any breach by you of any provision of these terms and conditions[, or arising out of any claim that you have breached any provision of these terms and conditions].

 </p>
							<p class="bottom20">
							<strong>Breaches of these terms and conditions

							</strong>

 </p>
							<p class="bottom20">
							Without prejudice to <?php echo $bname;?> other rights under these terms and conditions, if you breach these terms and conditions in any way, <?php echo $bname;?> may take such action as <?php echo $bname;?> deems appropriate to deal with the breach, including suspending your access to the website, prohibiting you from accessing the website, blocking computers using your IP address from accessing the website, contacting your internet service provider to request that they block your access to the website and/or bringing court proceedings against you.

 </p>
							<p class="bottom20">
							<strong>Variation</strong>

 </p>
							<p class="bottom20">
						<?php echo $bname;?>  may revise these terms and conditions from time-to-time.  Revised terms and conditions will apply to the use of this website from the date of the publication of the revised terms and conditions on this website.  Please check this page regularly to ensure you are familiar with the current version.

 </p>
							<p class="bottom20">
							<strong>Assignment</strong>

 </p>
							<p class="bottom20">
						<?php echo $bname;?>  may transfer, sub-contract or otherwise deal with <?php echo $bname;?> rights and/or obligations under these terms and conditions without notifying you or obtaining your consent.

 </p>
							<p class="bottom20">
							You may not transfer, sub-contract or otherwise deal with your rights and/or obligations under these terms and conditions.

 </p>
							<p class="bottom20">
							<strong>Severability

</strong>

 </p>
							<p class="bottom20">
							If a provision of these terms and conditions is determined by any court or other competent authority to be unlawful and/or unenforceable, the other provisions will continue in effect.  If any unlawful and/or unenforceable provision would be lawful or enforceable if part of it were deleted, that part will be deemed to be deleted, and the rest of the provision will continue in effect.

 </p>
							<p class="bottom20">
							<strong>Entire agreement</strong>

 </p>
							<p class="bottom20">
							These terms and conditions constitute the entire agreement between you and <?php echo $bname;?> in relation to your use of this website, and supersede all previous agreements in respect of your use of this website.

 </p>
							<p class="bottom20">
							<strong>Law and jurisdiction

</strong>

 </p>
							<p class="bottom20">
							These terms and conditions will be governed by and construed in accordance with Investments and Securities Act 2007, and any disputes relating to these terms and conditions will be subject to courts of United States. 
 </p>
          
   

      </div>
    </div>
  </div>
</section>




  
<div class="container bg_contact bg_one border_radius wow bounceInUp" data-wow-delay="500ms">
  <div class="row ">
    <div class="col-sm-4">
      <div class="contact_inner">
        <i class="icon-phone4"></i>
        <h5><strong>Email us : <a href="href%3d.php"mailto:<?php echo $email;?>"><?php echo $email;?></a></strong></h5>
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="contact_inner">
        <i class="icon-icons20"></i>
        <h5><strong>Mon - Sun 8.00 - 20.00</strong></h5>
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
      
        <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="ui/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        
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

<!-- Mirrored from <?php echo $bname;?>/rules by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:12:22 GMT -->
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