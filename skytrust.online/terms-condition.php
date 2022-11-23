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

<!-- Mirrored from <?php echo $bname;?>/terms-condition by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:13:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=_ui/css/bootstrap.min.php
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=_ui/css/font-awesome.min.php
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=_ui/css/envas-icons.php
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=_ui/css/animate.min.php
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=_ui/css/cubeportfolio.min.php
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=_ui/css/owl.carousel.php
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=_ui/css/owl.transitions.php
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=_ui/css/settings.php
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=_ui/css/bootsnav.php
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=_ui/css/loader.php
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=_ui/css/style52e552e5d237.php?p=1587912412%22>
&lt;link rel=&quot;icon&quot; href=_ui/images/favicon.php
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=_proof.php /&gt;

&lt;script type=&quot;text/javascript&quot;&gt;
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: &#039;en&#039;, layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, &#039;google_translate_element&#039;);
}
&lt;/script&gt;

&lt;script type=&quot;text/javascript&quot; src=_/translate.google.com/translate_a/element98c2.php?cb=googleTranslateElementInit%22></script>
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
    <link rel="icon" type="image/png" href="public/uploads/media/file_1643068552.png" />
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="public/theme/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="public/theme/plugins/icofont/icofont.min.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="public/theme/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="public/theme/plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="public/theme/css/style.css">
</head>

<body id="top">
    <header>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="public/uploads/media/logo.png" alt="" class="img-fluid">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class='navbar-nav ml-auto'><li class="nav-item"><a target="_self" href="privacy-policy.php" class=' nav-link' > Privacy Policy </a></li><li class="nav-item"><a target="_self" href="terms-condition.php" class='active nav-link' > Terms & Condition </a></li><li class="nav-item"><a target="_self" href="from.php" class=' nav-link' > FAQ </a></li> </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link btn-outline-red mr-lg-2" href="login.php"><i class="icofont-lock"></i> Sign In</a></li>
                                                <li class="nav-item"><a class="nav-link btn-signup mr-lg-2" href="register.php"><i class="icofont-ui-user"></i> Sign Up</a></li>
                                                <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn-outline-red" id="languageSelector" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icofont-globe"></i>  English <i class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageSelector">
                                                                    <a class="dropdown-item" href="indexfa27.php?language=English">English</a>
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
          <span class="text-white">Terms &amp; Condition</span>
          <h1 class="text-capitalize mb-5 text-lg">Terms &amp; Condition</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section general-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
        <h2><strong>Terms and Conditions</strong></h2>
<p>Welcome to LivoBank!</p>
<p>These terms and conditions outline the rules and regulations for the use of Livo Bank's Website, located at https://livo-bank.trickycode.xyz.</p>
<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use LivoBank if you do not agree to take all of the terms and conditions stated on this page.</p>
<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>
<h3><strong>Cookies</strong></h3>
<p>We employ the use of cookies. By accessing LivoBank, you agreed to use cookies in agreement with the Livo Bank's Privacy Policy.</p>
<p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>
<h3><strong>License</strong></h3>
<p>Unless otherwise stated, Livo Bank and/or its licensors own the intellectual property rights for all material on LivoBank. All intellectual property rights are reserved. You may access this from LivoBank for your own personal use subjected to restrictions set in these terms and conditions.</p>
<p>You must not:</p>
<ul>
<li>Republish material from LivoBank</li>
<li>Sell, rent or sub-license material from LivoBank</li>
<li>Reproduce, duplicate or copy material from LivoBank</li>
<li>Redistribute content from LivoBank</li>
</ul>
<p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the <a href="https://www.termsandconditionsgenerator.com/">Terms And Conditions Generator</a>.</p>
<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Livo Bank does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of Livo Bank,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, Livo Bank shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>
<p>Livo Bank reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>
<p>You warrant and represent that:</p>
<ul>
<li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
<li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
<li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
<li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
</ul>
<p>You hereby grant Livo Bank a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>
<h3><strong>Hyperlinking to our Content</strong></h3>
<p>The following organizations may link to our Website without prior written approval:</p>
<ul>
<li>Government agencies;</li>
<li>Search engines;</li>
<li>News organizations;</li>
<li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
<li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
</ul>
<p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>
<p>We may consider and approve other link requests from the following types of organizations:</p>
<ul>
<li>commonly-known consumer and/or business information sources;</li>
<li>dot.com community sites;</li>
<li>associations or other groups representing charities;</li>
<li>online directory distributors;</li>
<li>internet portals;</li>
<li>accounting, law and consulting firms; and</li>
<li>educational institutions and trade associations.</li>
</ul>
<p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of Livo Bank; and (d) the link is in the context of general resource information.</p>
<p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>
<p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to Livo Bank. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>
<p>Approved organizations may hyperlink to our Website as follows:</p>
<ul>
<li>By use of our corporate name; or</li>
<li>By use of the uniform resource locator being linked to; or</li>
<li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>
</ul>
<p>No use of Livo Bank's logo or other artwork will be allowed for linking absent a trademark license agreement.</p>
<h3><strong>iFrames</strong></h3>
<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>
<h3><strong>Content Liability</strong></h3>
<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>
<h3><strong>Your Privacy</strong></h3>
<p>Please read Privacy Policy</p>
<h3><strong>Reservation of Rights</strong></h3>
<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>
<h3><strong>Removal of links from our website</strong></h3>
<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>
<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>
<h3><strong>Disclaimer</strong></h3>
<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>
<ul>
<li>limit or exclude our or your liability for death or personal injury;</li>
<li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
<li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
<li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
</ul>
<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>
<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
			</div>
		</div>
	</div>
</section>



  
  
<div class="container bg_contact bg_one border_radius wow bounceInUp" data-wow-delay="500ms">
<div class="row ">
  <div class="col-sm-4">
    <div class="contact_inner">
      <i class="icon-phone4"></i>
      <h5><strong>Email us : <a href="href%3d.php"mailto:<?php echo $email;?>"><span class="__cf_email__" data-cfemail="c4b7b1b4b4abb6b084b7afbdb0b6b1b7b0eaabaaa8adaaa1">[email&#160;protected]</span></a></strong></h5>
      
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


    <script src="public/theme/plugins/jquery/jquery.js"></script>
   
    <script src="public/theme/plugins/bootstrap/js/popper.js"></script>
    <script src="public/theme/plugins/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="public/theme/plugins/slick-carousel/slick/slick.min.js"></script>
 
    <script src="public/theme/plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="public/theme/plugins/counterup/jquery.counterup.min.js"></script>

    <script src="public/theme/js/script.js"></script>

	

</body>
<script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "bc79c7465b67de6f35970335763e879fce9eb583db4b1914970a8fcaa9dc0d498287639aa37fff6806de679d0ed0a645", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="../salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>

<!-- Mirrored from <?php echo $bname;?>/terms-condition by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:13:28 GMT -->
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