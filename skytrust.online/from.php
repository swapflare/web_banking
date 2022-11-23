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

<!-- Mirrored from <?php echo $bname;?>/from by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:13:28 GMT -->
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
                    <ul class='navbar-nav ml-auto'><li class="nav-item"><a target="_self" href="privacy-policy.php" class=' nav-link' > Privacy Policy </a></li><li class="nav-item"><a target="_self" href="terms-condition.php" class=' nav-link' > Terms & Condition </a></li><li class="nav-item"><a target="_self" href="from.php" class='active nav-link' > FAQ </a></li> </ul>

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
          <span class="text-white">From</span>
          <h1 class="text-capitalize mb-5 text-lg">From</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section general-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
        <p><code>&lt;!--Header</code> Starts--&gt; <br />&lt;header class="layout_first"&gt;<br />&lt;div class="container"&gt;<br />&lt;div class="row"&gt;<br />&lt;nav class="navbar navbar-default bootsnav"&gt;<br />&lt;div class="topbar green_bg"&gt;<br />&lt;!-- &lt;span class="call"&gt;Telegram: &lt;a href="https://t.me/B-FIN"&lt;/a&gt; &lt;/span&gt; --&gt;<br />&lt;span class="call"&gt;Telegram: &lt;a href="https://t.me/B-FIN"&gt;Chat us&lt;/a&gt;&lt;/span&gt;<br />&lt;span class="call"&gt;&lt;div id="google_translate_element"&gt;&lt;/div&gt;&lt;/span&gt;<br /><br />&lt;ul class="top_social"&gt;<br />&lt;li&gt;&lt;a href="https://t.me/joinchat/" class="twitter"&gt;&lt;i class="fa fa-telegram"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;<br />&lt;/ul&gt;<br />&lt;/div&gt;<br />&lt;div class="attr-nav"&gt;<br />&lt;a class="scrolling getquote btn-dark text-uppercase border_radius" href="/?a=signup"&gt;Start Investing&lt;/a&gt;<br />&lt;/div&gt;<br />&lt;div class="attr-nav"&gt;<br />&lt;a class="scrolling getquote btn-dark text-uppercase border_radius" href="/?a=login"&gt;Login&lt;/a&gt;<br />&lt;/div&gt;<br />&lt;!-- Start Header Navigation --&gt;<br />&lt;div class="navbar-header"&gt;<br />&lt;button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"&gt;<br />&lt;i class="fa fa-bars"&gt;&lt;/i&gt;<br />&lt;/button&gt;<br />&lt;a class="navbar-brand" href="/home"&gt;<br />&lt;br&gt;&lt;img src="img/pplogo.png" width=350px" height="100px"/&gt;<br />&lt;/a&gt;<br />&lt;/div&gt;<br />&lt;!-- End Header Navigation --&gt;<br /><br />&lt;!-- nav links --&gt;<br />&lt;div class="collapse navbar-collapse" id="navbar-menu"&gt;<br />&lt;ul class="nav navbar-nav navbar-right" data-in="slideInUp" data-out="fadeOut"&gt;<br />&lt;li class=" "&gt;<br />&lt;a href="?a=home" class="border"&gt;Home&lt;/a&gt;<br />&lt;/li&gt;<br />&lt;li class=" "&gt;&lt;a href="?a=about" class="border"&gt;About Us&lt;/a&gt;&lt;/li&gt;<br />&lt;li class=" "&gt;<br />&lt;a href="?a=faq" class="border"&gt;FAQ<br />&lt;/a&gt;<br />&lt;/li&gt;<br /><br />&lt;li class=" "&gt;<br />&lt;a href="?a=rules" &gt;Terms<br />&lt;/a&gt;<br />&lt;/li&gt;<br /><br />&lt;li class=" "&gt;<br />&lt;a href="?a=support" class="border"&gt;Contact Us<br />&lt;/a&gt;<br />&lt;/li&gt;<br />&lt;/ul&gt;<br /><br /><br />&lt;/div&gt;<br />&lt;!-- /.navbar-collapse --&gt;<br />&lt;/nav&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/header&gt;<br />&lt;!--HEADER Ends--&gt;</p>
<p> </p>
<p><br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/section&gt;</p>
<p>&lt;!--Slider Main--&gt;<br /><br />&lt;section class="rev_slider_wrapper"&gt;<br />&lt;div id="rev_slider" class="rev_slider top" data-version="5.0"&gt;<br />&lt;ul&gt;<br />&lt;!-- SLIDE --&gt;<br />&lt;li data-transition="fade"&gt;<br />&lt;!-- MAIN IMAGE --&gt;<br />&lt;img src="ui/images/home1-banner2.jpg" alt="" data-bgposition="center center" data-bgfit="cover"&gt;<br />&lt;!-- LAYER NR. 1 --&gt;<br />&lt;h1 class="tp-caption tp-resizeme uppercase" <br />data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" <br />data-y="['290','190','190','100']" data-voffset="['0','0','0','0']"<br />data-responsive_offset="on"<br />data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" <br />data-start="1000"&gt;START<br />&lt;strong class="blue_t"&gt; START WINING TODAY<br />&lt;/strong&gt;<br />&lt;/h1&gt;<br />&lt;div class="tp-caption tp-resizeme" <br />data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" <br />data-y="['360','260','260','200']" data-voffset="['0','0','0','0']"<br />data-responsive_offset="on"<br />data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1300"&gt;<br />&lt;p&gt;Join over 2.000.000 people with the world’s leading hashpower provider&lt;br&gt;</p>
<p><br />It’s super simple - Your mining rigs are already set up and running.&lt;br&gt;<br />As soon as you’ve set up your account, you can start to mine your first coins using our Bitcoin cloud mining service!<br />&lt;/p&gt;<br />&lt;/div&gt;<br /><br />&lt;li data-transition="fade"&gt;<br />&lt;img src="ui/images/home3-banner3.jpg" alt="" data-bgposition="center center" data-bgfit="cover"&gt;<br />&lt;h1 class="tp-caption tp-resizeme uppercase" <br />data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" <br />data-y="['290','190','190','100']" data-voffset="['0','0','0','0']"<br />data-responsive_offset="on"<br />data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" <br />data-start="1000"&gt;Secured<br />&lt;strong class="blue_t"&gt;And Safe<br />&lt;/strong&gt;<br />&lt;/h1&gt;<br />&lt;div class="tp-caption tp-resizeme" <br />data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" <br />data-y="['360','260','260','200']" data-voffset="['0','0','0','0']"<br />data-responsive_offset="on"<br />data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1300"&gt;<br />&lt;p&gt;We offer the most secured Mining and Mining solution on the World<br />&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;div class="tp-caption tp-resizeme" <br />data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" <br />data-y="['410','310','290','180']" data-voffset="['0','0','0','0']"<br />data-responsive_offset="on" data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1600"&gt;<br />&lt;a href="about" class="btn-border text-uppercase border_radius"&gt;About us<br />&lt;/a&gt;<br />&lt;a href="/?a=login" class="text-uppercase border_radius btn-blue"&gt;Get Started<br />&lt;/a&gt;<br />&lt;/div&gt;<br />&lt;/li&gt;<br />&lt;/ul&gt;</p>
<p>&lt;/div&gt;<br />&lt;/section&gt;</p>
<p>&lt;!--SLIDERR Ends--&gt;</p>
<p> </p>
<p>&lt;!--Three columns text Info--&gt;<br />&lt;section id="info" class="padding"&gt;</p>
<p>&lt;a href="https://B-FIN.LTD/?a=signup"&gt;</p>
<p>&lt;div class="container"&gt;<br />&lt;div class="row"&gt;<br />&lt;div class="col-sm-12 text-right wow fadeInDown" data-wow-delay="500ms"&gt;<br />&lt;div id="google_translate_element" style=" max-width: 100%; "&gt;&lt;/div&gt;<br />&lt;/div&gt;<br /><br />&lt;div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms"&gt;<br />&lt;h2 class="text-capitalize bottom10"&gt;Three Easy &lt;span class="blue_t"&gt;Steps&lt;/span&gt;&lt;/h2&gt;<br />&lt;p&gt;Its fast and easy to get started with us in three simple steps&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class="row"&gt;<br />&lt;div class="col-sm-4"&gt;<br />&lt;div class="text_box text-center top40 wow fadeIn" data-wow-delay="700ms"&gt;<br />&lt;span&gt;&lt;i class="fa fa-user-plus"&gt;&lt;/i&gt;&lt;/span&gt;<br />&lt;h4 class="bottom10"&gt;Create An Account&lt;/h4&gt;<br />&lt;p&gt;Simply click on the register button to create a free account for yourself. Its quick and easy.&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class="col-sm-4"&gt;<br />&lt;div class="text_box text-center top40 wow fadeIn" data-wow-delay="900ms"&gt;<br />&lt;span&gt;&lt;i class="fa fa-gift"&gt;&lt;/i&gt;&lt;/span&gt;<br />&lt;h4 class="bottom10"&gt;Make Deposit&lt;/h4&gt;<br />&lt;p&gt;Pick a plan of your choice from our Mining plans. Make a deposit to your personal wallet.&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class="col-sm-4"&gt;<br />&lt;div class="text_box text-center top40 wow fadeIn" data-wow-delay="1100ms"&gt;<br />&lt;span&gt;&lt;i class="icon-bargraph"&gt;&lt;/i&gt;&lt;/span&gt;<br />&lt;h4 class="bottom10"&gt;Financial Growth&lt;/h4&gt;<br />&lt;p&gt;Watch your daily earnings live. Be ready to place a withdrawal as soon as your Mining is completed.&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/a&gt;<br />&lt;/section&gt;<br />&lt;!--Info Text ends--&gt;</p>
<p><br />&lt;!--Good Plan--&gt;<br />&lt;section id="plans" class="padding light"&gt;<br />&lt;div class="container"&gt;<br />&lt;div class="row"&gt;<br />&lt;div class="col-lg-6 col-md-6 col-sm-6 content_left"&gt;<br />&lt;figure&gt;<br />&lt;img src="ui/images/good-plans.jpg" alt="Good Plans" class="img-responsive"&gt;<br />&lt;/figure&gt;<br />&lt;/div&gt;<br />&lt;div class="col-lg-6 col-md-6 col-sm-6 content_right shadow margin-bottom"&gt;<br />&lt;div id="plan_slider" class="owl-carousel"&gt;<br />&lt;div class="item"&gt;<br />&lt;span class="count bottom20 blue_bg"&gt;1&lt;/span&gt;<br />&lt;h2 class="bottom10"&gt;Daily Mining Outputs&lt;/h2&gt;<br />&lt;p class="bottom20"&gt;Your mining outputs will be added to your<br />account daily and automatically &lt;/p&gt;<br />&lt;a href="?a=about" class="btn-border text-uppercase border_radius"&gt;Read More&lt;/a&gt;<br />&lt;/div&gt;<br />&lt;div class="item"&gt;<br />&lt;span class="count bottom20 blue_bg"&gt;2&lt;/span&gt;<br />&lt;h2 class="bottom10"&gt;State of the Art Mining Technology &lt;/h2&gt;<br />&lt;p class="bottom20"&gt;For every blockchain algorithm that we offer, we’re providing some of the highest performing mining systems that exist&lt;/p&gt;<br />&lt;a href="?a=about" class="btn-border text-uppercase border_radius"&gt;Read More&lt;/a&gt;<br />&lt;/div&gt;<br />&lt;div class="item"&gt;<br />&lt;span class="count bottom20 blue_bg"&gt;3&lt;/span&gt;<br />&lt;h2 class="bottom10"&gt;Diverse Mining Portfolio&lt;/h2&gt;<br />&lt;p class="bottom20"&gt;Choose from 6 major mining algorithms that span over 10+ mineable cryptocurrencies&lt;/p&gt;<br />&lt;a href="?a=about" class="btn-border text-uppercase border_radius"&gt;Read More&lt;/a&gt;<br />&lt;/div&gt;<br />&lt;div class="item"&gt;<br />&lt;span class="count bottom20 blue_bg"&gt;4&lt;/span&gt;<br />&lt;h2 class="bottom10"&gt;Secure &amp; Private&lt;/h2&gt;<br />&lt;p class="bottom20"&gt;We support cryptocurrencies that promote privacy, so we strive to keep collected user data to a minimum and only ask for information that is mandatory from a regulatory perspective&lt;/p&gt;<br />&lt;a href="?a=about" class="btn-border text-uppercase border_radius"&gt;Read More&lt;/a&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/section&gt;<br />&lt;!--GOOD PLANS--&gt;</p>
<p> </p>
<p>&lt;!--Facts Counter &amp; Grid--&gt;<br />&lt;section id="facts" class="padding"&gt;<br />&lt;div class="container"&gt;<br />&lt;div class="row"&gt;<br />&lt;div class="col-sm-12 text-center"&gt;<br />&lt;div class="wow fadeInDown" data-wow-delay="500ms"&gt;<br />&lt;h2 class="bottom10 text-capitalize"&gt;We’ll help you to grow &lt;span class="blue_t"&gt;your money&lt;/span&gt;&lt;/h2&gt;<br />&lt;p class="tagline heading_space"&gt;B-FIN’s innovative trading platforms and tools provide the power and reliability you need to feel more confident in your trading.<br />&lt;/p&gt;<br />&lt;/div&gt;</p>
<p>&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div id="grid_layout" class="cbp cbp-l-grid-mosaic-flat"&gt;<br />&lt;div class="cbp-item"&gt;<br />&lt;a href="#" class="cbp-lightbox"&gt;<br />&lt;img src="ui/images/grid1.jpg" alt=""&gt;<br />&lt;div class="overlay"&gt;<br />&lt;div class="overlay_inner"&gt;<br />&lt;h4&gt;B-FIN&lt;/h4&gt;<br />&lt;p&gt;B-FIN TO THE WORLD&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/a&gt;<br />&lt;/div&gt;<br />&lt;div class="cbp-item"&gt;<br />&lt;a href="#" class="cbp-lightbox"&gt;<br />&lt;img src="ui/images/grid3.jpg" alt=""&gt;<br />&lt;div class="overlay"&gt;<br />&lt;div class="overlay_inner"&gt;<br />&lt;h4&gt;B-FIN&lt;/h4&gt;<br />&lt;p&gt;B-FIN TO THE WORLD&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/a&gt;<br />&lt;/div&gt;<br />&lt;div class="cbp-item"&gt;<br />&lt;a href="#" class="cbp-lightbox"&gt;<br />&lt;img src="ui/images/grid2.jpg" alt=""&gt;<br />&lt;div class="overlay"&gt;<br />&lt;div class="overlay_inner"&gt;<br />&lt;h4&gt;B-FIN&lt;/h4&gt;<br />&lt;p&gt;B-FIN TO THE WORLD&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/a&gt;<br />&lt;/div&gt;<br />&lt;div class="cbp-item"&gt;<br />&lt;a href="#" class="cbp-lightbox"&gt;<br />&lt;img src="ui/images/security.jpg" alt="" style="width: 269px; height: 180px;"&gt;<br />&lt;div class="overlay"&gt;<br />&lt;div class="overlay_inner"&gt;<br />&lt;h4&gt;B-FIN&lt;/h4&gt;<br />&lt;p&gt;B-FIN TO THE WORLD&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/a&gt;<br />&lt;/div&gt;<br />&lt;div class="cbp-item"&gt;<br />&lt;a href="#" class="cbp-lightbox"&gt;<br />&lt;img src="ui/images/grid5.jpg" alt=""&gt;<br />&lt;div class="overlay"&gt;<br />&lt;div class="overlay_inner"&gt;<br />&lt;h4&gt;B-FIN&lt;/h4&gt;<br />&lt;p&gt;B-FIN TO THE WORLD&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/a&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/section&gt;<br />&lt;!--Facts &amp; Fun ends--&gt;</p>
<p>&lt;!--Video--&gt;<br />&lt;section id="bg-video" class="padding"&gt;<br />&lt;div class="container"&gt;<br />&lt;div class="row"&gt;<br />&lt;div class="col-sm-6 video wow fadeInLeft" data-wow-delay="500ms"&gt; <br />&lt;img src="ui/images/video-img.jpg" alt="video"&gt;</p>
<p>&lt;/div&gt;<br />&lt;div class="col-sm-6 right_content top40 bottom40 wow fadeInRight" data-wow-delay="500ms"&gt;<br />&lt;h2 class="bottom30 text-capitalize"&gt;About &lt;span class="blue_t"&gt;B-FIN&lt;/span&gt;&lt;/h2&gt;<br />&lt;p class="bottom30"&gt;B-FIN is an International Mining company, officially registered in FINRABROKRAGE, And founded on August 2004 firstly as a brokerage firm (CRD#: 282643/SEC#: 8-69727). The company has direct contracts with professional traders and miners around the world that guarantees the best services and ensures profits are made and remitted to investors daily.&lt;/p&gt;<br />&lt;p class="bottom30"&gt;It was established by a group of professional traders and investors, who have fore seen the future of crytpo currency.&lt;/p&gt;<br />&lt;p class="bottom30"&gt;B-FIN is founded on the principle that cryptocurrencies is changing the fundamental structure of not only our economy and banking systems but also the way we connect and engage as human beings.&lt;/p&gt;<br />&lt;a href="?a=about" class="btn-white text-uppercase border_radius"&gt;More About us&lt;/a&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/section&gt;<br />&lt;!--Video Ends--&gt;</p>
<p>&lt;section id="info" class="padding"&gt;<br />&lt;div class="container"&gt;<br />&lt;div class="row"&gt;<br />&lt;div class="col-sm-12 text-center wow fadeInDown"&gt; <br />&lt;h2 class="text-capitalize bottom10"&gt;Why &lt;span class="blue_t"&gt;Chose us&lt;/span&gt;&lt;/h2&gt;<br />&lt;p class="heading_space"&gt;With our innovative traders, you have many more reasons to chose us.&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class="row info"&gt;<br />&lt;div class="col-sm-4 icon_box text-center first wow fadeIn" data-wow-delay="500ms"&gt;<br />&lt;i class="icon-lock bottom20"&gt;&lt;/i&gt;<br />&lt;h4 class="bottom10"&gt;SAFE AND SECURE&lt;/h4&gt;<br />&lt;p&gt;Trade with 100% peace of mind as we have the best system security team onboard.&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="600ms"&gt;<br />&lt;i class="fa fa-bolt bottom20"&gt;&lt;/i&gt;<br />&lt;h4 class="bottom10"&gt;INSTANT TRADING&lt;/h4&gt;<br />&lt;p&gt;With our lightning speed servers, you are sure to get the best out of your Minings.&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="700ms"&gt;<br />&lt;i class="icon-layers bottom20"&gt;&lt;/i&gt;<br />&lt;h4 class="bottom10"&gt;PROGRESSIVE REVENUE&lt;/h4&gt;<br />&lt;p&gt;Watch your accruals grow in real time and monitor how much revenue is being generated for you..&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;div class="col-sm-4 icon_box text-center first wow fadeIn" data-wow-delay="800ms"&gt;<br />&lt;i class="fa fa-users bottom20"&gt;&lt;/i&gt;<br />&lt;h4 class="bottom10"&gt;Mining FOR ALL&lt;/h4&gt;<br />&lt;p&gt;With different packages, Our system is modelled to accommodate everyone no matter how much you have to invest.&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="900ms"&gt;<br />&lt;i class="fa fa-shield bottom20"&gt;&lt;/i&gt;<br />&lt;h4 class="bottom10"&gt;COVERED BY INSURANCE&lt;/h4&gt;<br />&lt;p&gt;You have zero chances of losing your Minings as all our assets are duly covered by inssurance..&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="1000ms"&gt;<br />&lt;i class="fa fa-bitcoin bottom20"&gt;&lt;/i&gt;<br />&lt;h4 class="bottom10"&gt;BITCOIN TRANSACTION&lt;/h4&gt;<br />&lt;p&gt;Invest in the world's most popular cryptocurrency and enjoy all the benefits that come with it..&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/section&gt;</p>
<p>&lt;!--Meet the Team--&gt;<br />&lt;section id="team" class="pricesection padding-top padding-bottom-half light"&gt;<br />&lt;div class="row"&gt;<br />&lt;div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms"&gt;<br />&lt;h2 class="bottom10 text-capitalize"&gt;Our Mining &lt;span class="blue_t"&gt;Plans&lt;/span&gt;&lt;/h2&gt;<br />&lt;p class="heading_space"&gt;We are trusted by thousands of investors across the globe.&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class="pricing pricing-palden "&gt;<br /><br /><br />&lt;div class="pricing-item"&gt;<br />&lt;div class="pricing-deco"&gt;<br />&lt;svg class="pricing-deco-img" enable-background="new 0 0 300 50" height="50px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 50" width="400px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px"&gt;<br />&lt;path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729<br />c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"&gt;&lt;/path&gt;<br />&lt;path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729<br />c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"&gt;&lt;/path&gt;<br />&lt;path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716<br />H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"&gt;&lt;/path&gt;<br />&lt;path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428<br />c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"&gt;&lt;/path&gt;<br /><br />&lt;!-- M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428<br />c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z --&gt;<br />&lt;/svg&gt;<br />&lt;div class="pricing-price "&gt;<br />2.5%&lt;br&gt;&lt;h2&gt;Daily&lt;h2&gt; <br />&lt;/div&gt;<br />&lt;h3 class="pricing-title"&gt;Starter&lt;/h3&gt;<br />&lt;/div&gt;<br />&lt;ul class="pricing-feature-list " style="padding-top: -100px !important;"&gt;<br />&lt;li class="pricing-feature"&gt;Min. Mining: $50&lt;/li&gt;<br />&lt;li class="pricing-feature"&gt; Max. Mining: $9,999 &lt;/li&gt;<br />&lt;li class="pricing-feature"&gt; 8 Days Mining Circle.&lt;/li&gt;<br /><br /><br />&lt;/ul&gt;<br />&lt;button style="cursor: pointer;" onclick="window.location.href = '/?a=login'" class="pricing-action"&gt;Get Started&lt;/button&gt;<br />&lt;/div&gt;</p>
<p><br />&lt;div class="pricing-item"&gt;<br />&lt;div class="pricing-deco"&gt;<br /><br />&lt;svg class="pricing-deco-img" enable-background="new 0 0 300 50" height="50px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 50" width="400px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px"&gt;<br />&lt;path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729<br />c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"&gt;&lt;/path&gt;<br />&lt;path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729<br />c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"&gt;&lt;/path&gt;<br />&lt;path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716<br />H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"&gt;&lt;/path&gt;<br />&lt;path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428<br />c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"&gt;&lt;/path&gt;<br /><br />&lt;!-- M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428<br />c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z --&gt;<br />&lt;/svg&gt;<br /><br />&lt;div class="pricing-price "&gt;<br />4%&lt;br&gt;&lt;h2&gt;Daily&lt;h2&gt;<br />&lt;/div&gt;<br />&lt;h3 class="pricing-title"&gt;Silver &lt;/h3&gt;<br />&lt;/div&gt;<br />&lt;ul class="pricing-feature-list " style="padding-top: -100px !important;"&gt;<br />&lt;li class="pricing-feature"&gt;Min. Mining: $10,000&lt;/li&gt;<br />&lt;li class="pricing-feature"&gt; Max. Mining: $24,999 &lt;/li&gt;<br />&lt;li class="pricing-feature"&gt;7 Days Mining Circle.&lt;/li&gt;<br /><br />&lt;/ul&gt;<br />&lt;button style="cursor: pointer;" onclick="window.location.href = '/?a=login'" class="pricing-action"&gt;Get Started&lt;/button&gt;<br />&lt;/div&gt;<br /><br />&lt;div class="pricing-item"&gt;<br />&lt;div class="pricing-deco"&gt;<br /><br />&lt;svg class="pricing-deco-img" enable-background="new 0 0 300 50" height="50px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 50" width="400px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px"&gt;<br />&lt;path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729<br />c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"&gt;&lt;/path&gt;<br />&lt;path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729<br />c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"&gt;&lt;/path&gt;<br />&lt;path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716<br />H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"&gt;&lt;/path&gt;<br />&lt;path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428<br />c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"&gt;&lt;/path&gt;<br /><br />&lt;!-- M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428<br />c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z --&gt;<br />&lt;/svg&gt;<br />&lt;div class="pricing-price "&gt;<br />5.5&lt;br&gt;&lt;h2&gt;Daily&lt;h2&gt;<br />&lt;/div&gt;<br />&lt;h3 class="pricing-title"&gt;Gold&lt;/h3&gt;<br />&lt;/div&gt;<br />&lt;ul class="pricing-feature-list " style="padding-top: -100px !important;"&gt;<br />&lt;li class="pricing-feature"&gt;Min. Mining: $25,000&lt;/li&gt;<br />&lt;li class="pricing-feature"&gt; Max. Mining: $Unlimited &lt;/li&gt;<br />&lt;li class="pricing-feature"&gt; 5 Days Mining Circle&lt;/li&gt;<br /><br />&lt;/ul&gt;<br />&lt;button style="cursor: pointer;" onclick="window.location.href = '/?a=login'" class="pricing-action"&gt;Get Started&lt;/button&gt;<br />&lt;/div&gt;<br /><br /><br /><br /><br /><br /><br /><br />&lt;/div&gt;<br /><br /><br />&lt;section class="cta-area" style="<br />background-image: url(modern_theme/build/img/header.jpg);<br />text-align: center;<br />/* padding: 100px 0; */<br />background-position: center;<br />background-size: cover;<br />background-color: #FFFFFF;<br />margin-bottom: 50px;<br />"&gt;</p>
<p>&lt;div class="container"&gt;<br />&lt;div class="row"&gt;<br />&lt;div class="col-md-12"&gt;<br />&lt;h4&gt;We provide &lt;span class="blink"&gt;2.5%&lt;/span&gt; Referral commission&lt;/h4&gt;<br />&lt;p&gt;Make your dream project with us and stay tensionfree.&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;</p>
<p>&lt;/section&gt;</p>
<p>&lt;!--Meet the TEAM ends--&gt;<br /><br /><br />&lt;!--Call Back Form--&gt;<br />&lt;section class="parallax_one padding"&gt;<br />&lt;div class="container"&gt;<br />&lt;div class="row"&gt;<br />&lt;div class="col-md-6 " &gt;<br />&lt;div class="btcwdgt-chart" bw-theme="light"&gt;<br />&lt;script data-cfasync="false" src="ui/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"&gt;&lt;/script&gt;<br /><br />&lt;script&gt;<br />(function(b,i,t,C,O,I,N) {<br />window.addEventListener('load',function() {<br />if(b.getElementById(C))return;<br />I=b.createElement(i),N=b.getElementsByTagName(i)[0];<br />I.src=t;I.id=C;N.parentNode.insertBefore(I, N);<br />},false)<br />})(document,'script','ui/js/widget.js','btcwdgt');<br />&lt;/script&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;</p>
<p>&lt;div class="col-md-12"&gt;&lt;h5 class="text-white mt-5" id="profit"&gt;&lt;/h5&gt;&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/form&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/section&gt;<br />&lt;!--Call Form Ends--&gt; <br /><br /><br />&lt;!--People Saying--&gt;<br />&lt;section id="people" class="padding"&gt;<br />&lt;div class="container"&gt;<br />&lt;div class="row"&gt;<br />&lt;div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms"&gt;<br />&lt;h2 class="bottom10 text-capitalize"&gt;What people are &lt;span class="blue_t"&gt;Saying&lt;/span&gt;&lt;/h2&gt;<br />&lt;p class="heading_space"&gt;We are trusted by thousands of users across the globe.&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div id="people_slider" class="owl-carousel"&gt;<br /><br />&lt;div class="item"&gt;<br />&lt;div class="people_wrap border_radius right"&gt;<br />&lt;i class="icon-quotes-right"&gt;&lt;/i&gt;<br />&lt;p&gt;This company is really a reliable company. Their system is very automated.&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;div class="testinomial_pic text-right pull-right"&gt;<br />&lt;div class="pic"&gt;&lt;img alt="testinomial" src="ui/user/images/profile.png" style="width: 58px;"&gt;&lt;/div&gt;<br />&lt;div class="testinomial_body"&gt;<br />&lt;span class="name"&gt;- Steve K,&lt;/span&gt;<br />&lt;span class="post_img"&gt;Verified Client&lt;/span&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br /><br /><br />&lt;div class="item"&gt;<br />&lt;div class="people_wrap border_radius right"&gt;<br />&lt;i class="icon-quotes-right"&gt;&lt;/i&gt;<br />&lt;p&gt;It's really wonderful. I would also like to say thank you to all your staff. B-FIN did exactly what you said it does.&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;div class="testinomial_pic text-right pull-right"&gt;<br />&lt;div class="pic"&gt;&lt;img alt="testinomial" src="ui/user/images/profile.png" style="width: 58px;"&gt;&lt;/div&gt;<br />&lt;div class="testinomial_body"&gt;<br />&lt;span class="name"&gt;- Carilyn E&lt;/span&gt;<br />&lt;span class="post_img"&gt;Verified Client&lt;/span&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br /><br /><br />&lt;div class="item"&gt;<br />&lt;div class="people_wrap border_radius right"&gt;<br />&lt;i class="icon-quotes-right"&gt;&lt;/i&gt;<br />&lt;p&gt;All my withdrawal from B-FIN are instantly processed. No pending withdrawals.&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;div class="testinomial_pic text-right pull-right"&gt;<br />&lt;div class="pic"&gt;&lt;img alt="testinomial" src="ui/user/images/profile.png" style="width: 58px;"&gt;&lt;/div&gt;<br />&lt;div class="testinomial_body"&gt;<br />&lt;span class="name"&gt;- Chrisanto&lt;/span&gt;<br />&lt;span class="post_img"&gt;Verified Client&lt;/span&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br /><br /><br />&lt;div class="item"&gt;<br />&lt;div class="people_wrap border_radius right"&gt;<br />&lt;i class="icon-quotes-right"&gt;&lt;/i&gt;<br />&lt;p&gt;This company have a very responsive customer service. All information I need are being given to me instantly. I never regret investing with B-FIN &lt;/p&gt;<br />&lt;/div&gt;<br />&lt;div class="testinomial_pic text-right pull-right"&gt;<br />&lt;div class="pic"&gt;&lt;img alt="testinomial" src="ui/user/images/profile.png" style="width: 58px;"&gt;&lt;/div&gt;<br />&lt;div class="testinomial_body"&gt;<br />&lt;span class="name"&gt;- Althea Shawn,&lt;/span&gt;<br />&lt;span class="post_img"&gt;Verified Client&lt;/span&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br /><br /><br />&lt;div class="item"&gt;<br />&lt;div class="people_wrap border_radius right"&gt;<br />&lt;i class="icon-quotes-right"&gt;&lt;/i&gt;<br />&lt;p&gt;All my withdrawal are being sent to my wallet instantly.. No delay and no hidden charges. Thank you B-FIN.&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;div class="testinomial_pic text-right pull-right"&gt;<br />&lt;div class="pic"&gt;&lt;img alt="testinomial" src="ui/user/images/profile.png" style="width: 58px;"&gt;&lt;/div&gt;<br />&lt;div class="testinomial_body"&gt;<br />&lt;span class="name"&gt;- Amah khan, &lt;/span&gt;<br />&lt;span class="post_img"&gt;Verified Client&lt;/span&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/section&gt;<br />&lt;!--People Saying ends--&gt;</p>
<p><br />&lt;!--News &amp; Thoughts--&gt;<br />&lt;section id="news" class="padding light layout_third"&gt;<br />&lt;div class="container"&gt;<br />&lt;div class="row"&gt;<br />&lt;div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms"&gt;<br />&lt;h2 class="bottom10 text-capitalize"&gt;What We &lt;span class="blue_t"&gt;Offer &lt;/span&gt;&lt;/h2&gt;<br />&lt;p class="heading_space"&gt;We’re building a new standard for crypto trading. One account, one balance, streamlined access to multiple liquidity venues.&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class="row"&gt;<br />&lt;div id="news_slider" class="owl-carousel"&gt;<br />&lt;div class="item"&gt;<br />&lt;div class="news"&gt;<br />&lt;div class="image"&gt;&lt;img src="ui/images/news3.jpg" alt="News"&gt;&lt;/div&gt;<br />&lt;div class="news_text"&gt;<br />&lt;h4 class="bottom10"&gt;&lt;a href="/?a=news"&gt;Trading&lt;/a&gt;&lt;/h4&gt;<br />&lt;p class="bottom30"&gt;Our goal is to provide one of the deepest and widest liquidity pools in the crypto market. We strive to accomplish this by aggregating liquidity from multiple connected venues like exchanges.&lt;/p&gt;</p>
<p>&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class="item"&gt;<br />&lt;div class="news"&gt;<br />&lt;div class="image"&gt;&lt;img src="ui/images/news2.jpg" alt="News"&gt;&lt;/div&gt;<br />&lt;div class="news_text"&gt;<br />&lt;h4 class="bottom10"&gt;&lt;a href="/?a=news"&gt;Mining&lt;/a&gt;&lt;/h4&gt;<br />&lt;p class="bottom30"&gt;For the crypto assets in your account, we use BitGo custodial services and applications. BitGo is trusted by institutions in the digital assets industry for security, compliance and custodial solutions.&lt;/p&gt;</p>
<p>&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class="item"&gt;<br />&lt;div class="news"&gt;<br />&lt;div class="image"&gt;&lt;img src="ui/images/cryptoexchange.jpg" alt="News" style="width: 360px; height: 210px;"&gt;&lt;/div&gt;<br />&lt;div class="news_text"&gt;<br />&lt;h4 class="bottom10"&gt;&lt;a href="#"&gt;Exchange&lt;/a&gt;&lt;/h4&gt;<br />&lt;p class="bottom30"&gt;We also buy bitcoins from our investors. We provide several payment methods to enable you quickly convert your cash to coin without any hassle. &lt;/p&gt;</p>
<p>&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br /><br />&lt;div class="item"&gt;<br />&lt;div class="news"&gt;<br />&lt;div class="image"&gt;&lt;img src="ui/images/news1.jpg" alt="News" style="width: 360px; height: 210px;"&gt;&lt;/div&gt;<br />&lt;div class="news_text"&gt;<br />&lt;h4 class="bottom10"&gt;&lt;a href="/?a=news"&gt;Loan&lt;/a&gt;&lt;/h4&gt;<br />&lt;p class="bottom30"&gt;Our aim is to simplify access to the crypto markets by letting our brokerage customers use the buying power from a single account to access liquidity from all of our connected venues.&lt;/p&gt;</p>
<p>&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br /><br /><br /><br /><br /><br /><br /><br /><br />&lt;/div&gt;<br />&lt;/div&gt;<br /><br />&lt;div class="row"&gt;<br /><br />&lt;div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms"&gt;<br />&lt;br/&gt;&lt;br/&gt;<br /><br /><br />&lt;/div&gt;<br />&lt;/div&gt;<br /><br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;</p>
<p><br />&lt;/table&gt;<br /><br />&lt;/div&gt;<br />&lt;/section&gt;<br />&lt;!--News &amp; Thoughts ends--&gt;<br /><br /><br />&lt;!--Partners--&gt;<br />&lt;section id="partner" class="padding-top"&gt;<br />&lt;div class="container"&gt;<br />&lt;div class="row"&gt;<br />&lt;div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms"&gt;<br />&lt;h2 class="bottom10 text-capitalize"&gt;Be Our &lt;span class="blue_t"&gt;Partners&lt;/span&gt;&lt;/h2&gt;<br />&lt;p class="heading_space"&gt;Are you passionate about working with us? We are glad to let you know that we will always welcome you with an open arm ready to work with you in the best way&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br /><br />&lt;/div&gt;<br />&lt;/section&gt;<br />&lt;!--Partner Ends--&gt;</p>
<p> </p>
<p><br />&lt;!--Footer--&gt;</p>
<p> </p>
<p>&lt;div class="container bg_contact bg_one border_radius wow bounceInUp" data-wow-delay="500ms"&gt;<br />&lt;div class="row "&gt;<br />&lt;div class="col-sm-4"&gt;<br />&lt;div class="contact_inner"&gt;<br />&lt;i class="icon-phone4"&gt;&lt;/i&gt;<br />&lt;h5&gt;&lt;strong&gt;Whatsapp : &lt;a href="https://wa.me/JE4WN65EOEMQK19"&gt;+12098038619&lt;/a&gt;&lt;/strong&gt;&lt;/h5&gt;<br />&lt;a href="mailto:<a href="cdn-cgi/l/email-protection.php" class="__cf_email__" data-cfemail="c3b0b6b3b3acb1b78381ee858a8ded8f9787">[email&#160;protected]</a>"&gt;&lt;span&gt;<a href="cdn-cgi/l/email-protection.php" class="__cf_email__" data-cfemail="f98a8c8989968b8db9bbd4bfb0b7d7b5adbd">[email&#160;protected]</a>&lt;/span&gt;&lt;/span&gt;&lt;/a&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class="col-sm-4"&gt;<br />&lt;div class="contact_inner"&gt;<br />&lt;i class="icon-icons20"&gt;&lt;/i&gt;<br />&lt;h5&gt;&lt;strong&gt;Mon - Sun 8.00 - 20.00&lt;/strong&gt;&lt;/h5&gt;<br />&lt;h5&gt;&lt;/h5&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class="col-sm-4"&gt;<br />&lt;div class="contact_inner"&gt;<br />&lt;i class="icon-location"&gt;&lt;/i&gt;<br />&lt;h5&gt;&lt;strong&gt;Company Address: 440 S. LASALLE ST, STE. 900 CHICAGO, IL 60605 USA &lt;/h5&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;footer class="footer_top padding-top"&gt;<br />&lt;div class="container"&gt;<br />&lt;div class="row"&gt;<br />&lt;div class="col-sm-4 footer_panel heading_space"&gt;<br />&lt;a class="navbar-brand" href="/?a=home"&gt;<br />&lt;img src="img/pplogo.png" width=275px" /&gt;<br />&lt;/a&gt;<br />&lt;p class="bottom30"&gt;B-FIN is an International Mining company, officially registered in FINRABROKRAGE, it was launched in October 2015. The company has direct contracts with professional traders and miners around the world that guarantees the best services and ensures profits are made and remitted to investors daily.&lt;/p&gt;<br />&lt;!--ul class="social_icon heading_top"&gt;<br />&lt;li&gt;&lt;a href="#." class="facebook"&gt;&lt;i class="fa fa-facebook"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;<br />&lt;li&gt;&lt;a href="#." class="twitter"&gt;&lt;i class="icon-twitter4"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;<br />&lt;li&gt;&lt;a href="#." class="dribble"&gt;&lt;i class="icon-dribbble5"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;<br />&lt;li&gt;&lt;a href="#." class="instagram"&gt;&lt;i class="icon-instagram"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;<br />&lt;li&gt;&lt;a href="#." class="vimo"&gt;&lt;i class="icon-vimeo4"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;<br />&lt;/ul--&gt;<br />&lt;/div&gt;<br />&lt;div class="col-sm-4 footer_panel heading_space"&gt;<br />&lt;h3 class="heading bottom30"&gt;Useful &lt;span class="blue_t"&gt;Links&lt;/span&gt;&lt;/h3&gt;<br />&lt;ul class="links"&gt;<br />&lt;li&gt;&lt;a href="?a=home"&gt;&lt;i class="icon-chevron-small-right"&gt;&lt;/i&gt;Home&lt;/a&gt;&lt;/li&gt;<br />&lt;li&gt;&lt;a href="?a=about"&gt;&lt;i class="icon-chevron-small-right"&gt;&lt;/i&gt;Company&lt;/a&gt;&lt;/li&gt;<br />&lt;li&gt;&lt;a href="?a=plans"&gt;&lt;i class="icon-chevron-small-right"&gt;&lt;/i&gt;Packages&lt;/a&gt;&lt;/li&gt;<br />&lt;li&gt;&lt;a href="?a=faq"&gt;&lt;i class="icon-chevron-small-right"&gt;&lt;/i&gt;FAQ&lt;/a&gt;&lt;/li&gt;<br /><br />&lt;li&gt;&lt;a href="?a=contact-us"&gt;&lt;i class="icon-chevron-small-right"&gt;&lt;/i&gt;Contact Us&lt;/a&gt;&lt;/li&gt;<br />&lt;li&gt;&lt;a href="/?a=login"&gt;&lt;i class="icon-chevron-small-right"&gt;&lt;/i&gt;Start Investing&lt;/a&gt;&lt;/li&gt;<br />&lt;/ul&gt;<br />&lt;/div&gt;<br />&lt;div class="col-sm-4 footer_panel heading_space"&gt;<br />&lt;h3 class="bottom30 heading"&gt; Live &lt;span class="blue_t"&gt;Chart&lt;/span&gt;&lt;/h3&gt;<br /><br />&lt;script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"&gt;&lt;/script&gt;&lt;script data-cfasync="false" src="ui/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"&gt;&lt;/script&gt;<br /><br /><br />&lt;script type="text/javascript"&gt;<br />baseUrl = "https://widgets.cryptocompare.com/";<br />var scripts = document.getElementsByTagName("script");<br />var embedder = scripts[ scripts.length - 1 ];<br />var cccTheme = {"General":{"background":"#121212","borderColor":"#000"},"Tabs":{"background":"#000","color":"#FFF","borderColor":"#333","activeBackground":"#333","activeColor":"#FFF"},"Row":{"color":"#FFF","borderColor":"#585858"},"Trend":{"colorUp":"#78dc3c","colorDown":"#ee3737","colorUnchanged":"#3791ee"},"Conversion":{"background":"#000","color":"#CCC"}};<br />(function (){<br />var appName = encodeURIComponent(window.location.hostname);<br />if(appName==""){appName="local";}<br />var s = document.createElement("script");<br />s.type = "text/javascript";<br />s.async = true;<br />var theUrl = baseUrl+'serve/v1/coin/multi?fsyms=BTC,ETH,XMR&amp;tsyms=USD,EUR,CNY,GBP';<br />s.src = theUrl + ( theUrl.indexOf("?") &gt;= 0 ? "&amp;" : "?") + "app=" + appName;<br />embedder.parentNode.appendChild(s);<br />})();<br />&lt;/script&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/footer&gt;<br />&lt;div class="copyright"&gt;<br />&lt;div class="container"&gt;<br />&lt;div class="row"&gt;<br />&lt;div class="col-md-12 text-center"&gt;<br />&lt;p&gt;Copyright &amp;copy; 2021 &lt;a href="#."&gt;B-FIN.LTD&lt;/a&gt;. all rights reserved.&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;script src="ui/js/jquery-2.2.3.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/bootstrap.min.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/jquery.parallax-1.1.3.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/jquery.appear.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/jquery-countTo.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/bootsnav.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/jquery.cubeportfolio.min.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/owl.carousel.min.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/viedobox_video.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/jquery.themepunch.tools.min.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/jquery.themepunch.revolution.min.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/jquery.themepunch.revolution.min.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/revolution.extension.layeranimation.min.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/revolution.extension.navigation.min.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/revolution.extension.parallax.min.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/revolution.extension.slideanims.min.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/revolution.extension.video.min.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/wow.min.js"&gt;&lt;/script&gt;<br />&lt;script src="ui/js/functionsac1dac1d.js?u=1587912441"&gt;&lt;/script&gt;</p>
<p><br />&lt;script&gt;<br />function getProfit(){<br />var amount = document.getElementById("amount").value*1;<br />var package = document.getElementById("package").value*1;<br />var selectedType = document.getElementById("typez").value;<br />var mins = [50, 100,10000,100000];<br />var maxs = [99, 9999,99999,10000000];</p>
<p>var tradeMins = [1000, 10000,20000,100000];<br />var tradeMaxs = [9999, 19999,99999,10000000];</p>
<p><br />var percents = [20, 50,100,200];<br />var tradePercents = [3.1, 4,6.7,7.2];<br />var loanPercents = [3, 2.5,1.5,1];<br />var packages = ["Amateur", "Starter","Basic","Standard"];<br />var min = 0;<br />var max = 0;<br />var profit = "profit";<br />var perc = 1;<br />var multiplier = 0;</p>
<p>switch(selectedType){<br />case "0":{<br />perc = percents[package]; <br />min = mins[package];<br />max = maxs[package];<br />multiplier = 1;<br />}<br />break;<br />case "1":{<br />perc = tradePercents[package]; <br />min = tradeMins[package];<br />max = tradeMaxs[package];<br />multiplier =30;<br />}<br />break;<br />case "2":{<br />profit = "interest"<br />perc = loanPercents[package]; <br />}<br />break;<br />}</p>
<p>if(amount&gt;=min&amp;&amp;amount&lt;=max){</p>
<p><br /><br />console.log("it is"+selectedType);<br />document.getElementById("profit").innerHTML = `Expected `+profit+` after is: &lt;strong class="text-success"&gt;$`+(((perc/100)*multiplier*amount)+amount)+`&lt;/strong&gt;`<br />}else{<br />document.getElementById("profit").innerHTML ="&lt;span class='text-danger'&gt;For "+packages[package]+" Package, Minimum is: $"+min+" and Maximum is: $"+max+"&lt;/span&gt;"; <br />}</p>
<p><br />console.log(amount+" We want to calculate porofit "+min);<br /><br />return false;<br />}</p>
<p>&lt;/script&gt;</p>
<p>&lt;!-- &lt;link rel="stylesheet" type="text/css" href="https://B-FIN.LTD/css/tawkto.css" /&gt; <br />&lt;div id="myBtn" title="Go to top" class=""&gt; &lt;iframe src="https://B-FIN.LTD/B-FIN.php" width="200px" frameborder="0" scrolling="no"&gt;&lt;/iframe&gt;&lt;/div&gt;<br />&lt;script async data-id="61687" src="https://cdn.widgetwhats.com/script.min.js"&gt;&lt;/script&gt; --&gt;<br />&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p>&lt;!-- Bootstrap CSS --&gt;<br />&lt;link rel="stylesheet" href="public/website/theme/css/bootstrap.min.css"&gt;</p>
<p>&lt;!-- fontawesome --&gt;<br />&lt;!--<br />&lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css" integrity="sha512-6c4nX2tn5KbzeBJo9Ywpa0Gkt+mzCzJBrE1RB6fmpcsoN+b/w/euwIMuQKNyUoU/nToKN3a8SgNOtPrbW12fug==" crossorigin="anonymous" /&gt;</p>
<p>&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/js/all.min.js" integrity="sha512-3dlGoFoY39YEcetqKPULIqryjeClQkr2KXshhYxFXNZAgRFZElUW9UQmYkmQE1bvB8tssj3uSKDzsj8rA04Meg==" crossorigin="anonymous"&gt;&lt;/script&gt;</p>
<p>--&gt;</p>
<p>&lt;link rel="stylesheet" href="public/website/theme/css/main6473.css"&gt;<br />&lt;link rel="stylesheet" href="public/website/theme/css/widget6473.css"&gt;<br />&lt;link rel="stylesheet" href="public/website/theme/css/language6473.css"&gt;<br />&lt;div class="fixed-to-bottom"&gt;<br />&lt;iframe class="ticker" src="//www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=2020&amp;s=1&amp;mc=USD&amp;mbg=F0F0F0&amp;bs=no&amp;bc=000014&amp;f=verdana&amp;fs=10px&amp;fc=000044&amp;lc=036EB4&amp;lhc=FE9A00&amp;vc=FE9A00&amp;vcu=008000&amp;vcd=FF0000&amp;" width="100%" height="30" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"&gt;&lt;/iframe&gt;<br />&lt;/div&gt; <br /><br />&lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"&gt;</p>
<p>&lt;a href="https://api.whatsapp.com/send?phone=+1(224) 698-9562&amp;text=Hi." class="float" target="_blank"&gt;<br /><br />&lt;img src="/whatsapp.png" class="my-float" width=60px height=60px&gt;<br />&lt;/a&gt;<br />&lt;style&gt;.float{<br />position:fixed;<br />width:90px;<br />height:90px;<br />bottom:31px;<br />:40px;<br />color:green;<br />border-radius:50px;<br />text-align:center;<br />font-size:30px;<br />box-shadow: 2px 2px 3px #999;<br />z-index:100;<br />}</p>
<p>.my-float{<br />margin-top:16px;<br />}&lt;/style&gt;</p>
<p>&lt;!-- Smartsupp Live Chat script --&gt;<br />&lt;script type="text/javascript"&gt;<br />var _smartsupp = _smartsupp || {};<br />_smartsupp.key = '412f2dc8bb9565ba03028218d14fe4eebecc4cfe';<br />window.smartsupp||(function(d) {<br />var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];<br />s=d.getElementsByTagName('script')[0];c=d.createElement('script');<br />c.type='text/javascript';c.charset='utf-8';c.async=true;<br />c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);<br />})(document);<br />&lt;/script&gt;</p>
			</div>
		</div>
	</div>
</section>



  
  
<div class="container bg_contact bg_one border_radius wow bounceInUp" data-wow-delay="500ms">
<div class="row ">
  <div class="col-sm-4">
    <div class="contact_inner">
      <i class="icon-phone4"></i>
      <h5><strong>Email us : <a href="href%3d.php"mailto:<?php echo $email;?>"><span class="__cf_email__" data-cfemail="374442474758454377445c4e43454244431958595b5e5952">[email&#160;protected]</span></a></strong></h5>
      
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

<!-- Mirrored from <?php echo $bname;?>/from by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:13:28 GMT -->
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