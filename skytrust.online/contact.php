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
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="1GxDEoVCk3c3B0iWiMb6u7M8g1y2LRT5e3OTScDC">
    <meta name="keywords" content=""/>
    <meta name="description" content="
&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
&lt;meta charset=&quot;utf-8&quot;&gt;
&lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge&quot;&gt;
&lt;meta name=&quot;viewport&quot; content=&quot;width=1336px&quot;&gt;
&lt;title&gt;B-FIN To The World&lt;/title&gt;
&lt;meta name=&quot;google-site-verification&quot; content=&quot;hFVZKHFSbK4gybZRqBdIZg3JLGS4SDvXbKMUQykXa24&quot; /&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;ui/css/bootstrap.min.css&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;ui/css/font-awesome.min.css&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;ui/css/envas-icons.css&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;ui/css/animate.min.css&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;ui/css/cubeportfolio.min.css&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;ui/css/owl.carousel.css&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;ui/css/owl.transitions.css&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;ui/css/settings.css&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;ui/css/bootsnav.css&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;ui/css/loader.css&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;ui/css/style52e552e5.css?p=1587912412&quot;&gt;
&lt;link rel=&quot;icon&quot; href=&quot;ui/images/favicon.png&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;proof.css&quot; /&gt;

&lt;script type=&quot;text/javascript&quot;&gt;
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: &#039;en&#039;, layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, &#039;google_translate_element&#039;);
}
&lt;/script&gt;

&lt;script type=&quot;text/javascript&quot; src=&quot;//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit&quot;&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;!--Loader--&gt;
&lt;!--
&lt;div class=&quot;loader&quot;&gt;
&lt;div class=&quot;cssload-loader&quot;&gt;
&lt;div class=&quot;cssload-inner cssload-one&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;cssload-inner cssload-two&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;cssload-inner cssload-three&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;--&gt; &lt;!--Loader Ends --&gt;

&lt;style&gt;
.layout_second nav.navbar.bootsnav.sticked .navbar-brand &gt; img, .layout_dark nav.navbar.bootsnav.sticked .navbar-brand &gt; img, .layout_first.stick nav.navbar.bootsnav .navbar-brand &gt; img, .layout_sixth nav.navbar.bootsnav .navbar-brand &gt; img {
width: 200px !important;
}
&lt;/style&gt;"/>

    <title>STLBANK</title>

    <!-- Favicon-->
    <link rel="icon" type="image/png" href="https://<?php echo $bname;?>/public/uploads/media/file_1643068552.png" />
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="https://<?php echo $bname;?>/public/theme/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="https://<?php echo $bname;?>/public/theme/plugins/icofont/icofont.min.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="https://<?php echo $bname;?>/public/theme/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="https://<?php echo $bname;?>/public/theme/plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="https://<?php echo $bname;?>/public/theme/css/style.css">
</head>

<body id="top">
    <header>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="https://<?php echo $bname;?>/public/uploads/media/logo.png" alt="" class="img-fluid">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class='navbar-nav ml-auto'><li class="nav-item"><a target="_self" href="https://<?php echo $bname;?>/privacy-policy" class=' nav-link' > Privacy Policy </a></li><li class="nav-item"><a target="_self" href="https://<?php echo $bname;?>/terms-condition" class=' nav-link' > Terms & Condition </a></li><li class="nav-item"><a target="_self" href="https://<?php echo $bname;?>/from" class=' nav-link' > FAQ </a></li> </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link btn-outline-red mr-lg-2" href="https://<?php echo $bname;?>/login"><i class="icofont-lock"></i> Sign In</a></li>
                                                <li class="nav-item"><a class="nav-link btn-signup mr-lg-2" href="https://<?php echo $bname;?>/register"><i class="icofont-ui-user"></i> Sign Up</a></li>
                                                <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn-outline-red" id="languageSelector" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icofont-globe"></i>  English <i class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageSelector">
                                                                    <a class="dropdown-item" href="https://<?php echo $bname;?>?language=English">English</a>
                                                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
			<span class="text-white">Contact Us</span>
            <h1 class="text-capitalize mb-5 text-lg">Get in Touch</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section contact-info pb-0">
    <div class="container">
         <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-live-support"></i>
                    <h5>Call Us</h5>
                    2098038619
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-support-faq"></i>
                    <h5>Email Us</h5>
                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="741510191d1a34071f0d00060107005a1b1a181d1a11">[email&#160;protected]</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-location-pin"></i>
                    <h5>Location</h5>
                    30100 Chagrin Boulevard, Suit 106 Cleveland, OH 44124
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">Contact Us</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="mb-5">Write us a message</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form id="contact-form" class="contact__form"  autocomplete="off" method="post" action="https://<?php echo $bname;?>/send_message">
                    <!-- form message -->
                    <div class="row mb-2">
                        <div class="col-12">
                        
                                                </div>
                    </div>
                    <input type="hidden" name="_token" value="1GxDEoVCk3c3B0iWiMb6u7M8g1y2LRT5e3OTScDC">                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Your Email" required>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="subject" id="subject" type="text" class="form-control" placeholder="Your Subjects" required>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="text" class="form-control" placeholder="Your Phone" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your message" required></textarea>
                    </div>

                    <div class="text-center">
                        <input class="btn btn-main btn-round-full" name="submit" type="submit" value="Send Message"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



  
  
<div class="container bg_contact bg_one border_radius wow bounceInUp" data-wow-delay="500ms">
<div class="row ">
  <div class="col-sm-4">
    <div class="contact_inner">
      <i class="icon-phone4"></i>
      <h5><strong>Email us : <a href="href="mailto:<?php echo $email;?>"><span class="__cf_email__" data-cfemail="acdfd9dcdcc3ded8ecdfc7d5d8ded9dfd882c3c2c0c5c2c9">[email&#160;protected]</span></a></strong></h5>
      
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
             <a class="navbar-brand" href="home">
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
          <li><a href="home"><i class="icon-chevron-small-right"></i>Home</a></li>
          <li><a href="about"><i class="icon-chevron-small-right"></i>Company</a></li>
          <li><a href="rules"><i class="icon-chevron-small-right"></i>Terms</a></li>
          <li><a href="faq"><i class="icon-chevron-small-right"></i>FAQ</a></li>
          
          <li><a href="support"><i class="icon-chevron-small-right"></i>Contact Us</a></li>
        <li><a href="login"><i class="icon-chevron-small-right"></i>Start Investing</a></li>
      </ul>
    </div>
    <div class="col-sm-4 footer_panel heading_space">
      <h3 class="bottom30 heading"> Live <span class="blue_t">Chart</span></h3>
    
      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="ui/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      
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
<script src="ui/js/functionsac1dac1dac1d.js?u=1587912441"></script>


    <script src="https://<?php echo $bname;?>/public/theme/plugins/jquery/jquery.js"></script>
   
    <script src="https://<?php echo $bname;?>/public/theme/plugins/bootstrap/js/popper.js"></script>
    <script src="https://<?php echo $bname;?>/public/theme/plugins/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="https://<?php echo $bname;?>/public/theme/plugins/slick-carousel/slick/slick.min.js"></script>
 
    <script src="https://<?php echo $bname;?>/public/theme/plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="https://<?php echo $bname;?>/public/theme/plugins/counterup/jquery.counterup.min.js"></script>

    <script src="https://<?php echo $bname;?>/public/theme/js/script.js"></script>

	

</body>
<script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "bc79c7465b67de6f35970335763e879fce9eb583db4b1914970a8fcaa9dc0d498287639aa37fff6806de679d0ed0a645", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>
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
   