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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $bname;?></title>
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
<link rel="stylesheet" type="text/css" href="ui/css/style52e552e552e552e5.css?p=1587912412">
<link rel="icon" href="ui/images/favicon.png">
	<link rel="stylesheet" type="text/css" href="proof.css">

</head>
<body>
<!--Loader-->
<!--
<div class="loader">
  <div class="cssload-loader">
    <div class="cssload-inner cssload-one">
    </div>
    <div class="cssload-inner cssload-two">
    </div>
    <div class="cssload-inner cssload-three">
    </div>
  </div>
</div>--> <!--Loader Ends -->

<style>
    .layout_second nav.navbar.bootsnav.sticked .navbar-brand > img, .layout_dark nav.navbar.bootsnav.sticked .navbar-brand > img, .layout_first.stick nav.navbar.bootsnav .navbar-brand > img, .layout_sixth nav.navbar.bootsnav .navbar-brand > img {
     width: 200px !important; 
}
</style>

<!--Header Starts-->    
<header class="layout_first">
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-default bootsnav">
        <div class="topbar blue_bg">
            <!-- <span class="call">Telegram: <a href="https://t.me/joinchat/"</a> </span> -->
            <span class="call"> <a href="https://t.me/joinchat/"></a></span>
          <span class="call"><div id="google_translate_element"></div></span>
     
          <ul class="top_social">
            <li><a href="https://t.me/joinchat/" class="twitter"><i class="fa fa-telegram"></i></a></li>
          </ul>
        </div>
        <div class="attr-nav">
            <a class="scrolling getquote btn-dark text-uppercase border_radius" href="register.php">Start Banking</a>
        </div>
         <div class="attr-nav">
            <a class="scrolling getquote btn-dark text-uppercase border_radius" href="login.php">Login</a>
        </div>
        <!-- Start Header Navigation -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
          </button>
            <a class="navbar-brand" href="index.php">
                <br><span class="blue_t"><h3><strong><?php echo $bname;?> </strong></h3></span>
                </a>
        </div>
        <!-- End Header Navigation -->
        
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
              <a href="rules.php" >Terms
              </a>
            </li>
            
            <li class=" ">
              <a href="login.php" >LOGIN
              </a>
            </li>
            
            <li class=" ">
              <a href="register.php" class="border">REGISTER
              </a>
            </li>
          </ul>
   
            
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </div>
  </div>
</header>
<!--HEADER Ends-->

 <!--Slider Main-->
 
<section class="rev_slider_wrapper">
  <div id="rev_slider" class="rev_slider top" data-version="5.0">
    <ul>
				<li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="ui/images/home1-banner2.jpg" alt="desk" data-bgfit="cover" data-bgposition="right top" data-bgrepeat="no-repeat">
                                        <!-- LAYER NR. 1 -->
        <h3 class="tp-caption  tp-resizeme uppercase" 
          data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" 
          data-y="['290','190','190','100']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
          data-start="1000"><?php echo $bname;?> 
          <strong class="blue_t">Online Banking
          </strong>
        </h3>
        <div class="tp-caption  tp-resizeme" 
        data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" 
        data-y="['360','260','260','200']" data-voffset="['0','0','0','0']"
        data-responsive_offset="on"
        data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1300">
          <p>We are trusted by more than 2,500,000 allround the world
          </p>
        </div>
        <div class="tp-caption  tp-resizeme"  
         data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" 
          data-y="['410','310','290','180']" data-voffset="['0','0','0','0']"
        data-responsive_offset="on" data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1600">
            <a href="about.php" class="btn-border text-uppercase border_radius">About us
          </a>
          <a href="login.php" class="text-uppercase border_radius btn-blue">Get started
          </a>
        </div>
      </li>
      <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="ui/images/home3-banner3.jpg" alt="desk" data-bgfit="cover" data-bgposition="right top" data-bgrepeat="no-repeat">
                                        <!-- LAYER NR. 1 -->
        <h3 class="tp-caption  tp-resizeme uppercase" 
          data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" 
          data-y="['290','190','190','100']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
          data-start="1000">
          <span class="blue_t">
        <div class="tp-caption  tp-resizeme" 
        data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" 
        data-y="['360','260','260','200']" data-voffset="['0','0','0','0']"
        data-responsive_offset="on"
        data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1300">
          <p>We are trusted by more than 2,500,000 allround the world
          </p>
        </div>
        <div class="tp-caption  tp-resizeme"  
         data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" 
          data-y="['410','310','290','180']" data-voffset="['0','0','0','0']"
        data-responsive_offset="on" data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1600">
            <a href="about.php" class="btn-border text-uppercase border_radius btn-blue_t">About us
          </a>
          <a href="login.php" class="text-uppercase border_radius btn-blue">Get started
          </a>
        </div>
      </li>
      <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="img/q542.jpg" alt="desk" data-bgfit="cover" data-bgposition="right top" data-bgrepeat="no-repeat">
                                        <!-- LAYER NR. 1 -->
        <h3 class="tp-caption  tp-resizeme uppercase" 
          data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" 
          data-y="['290','190','190','100']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
          data-start="1000"><span class="blue_t"><h3>Best-<strong>Online Banking</strong></h3></span>
          <span class="blue_t"><h3>Safest<strong>-Online Banking</strong></h3></span>
        </h3>
        <div class="tp-caption  tp-resizeme" 
        data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" 
        data-y="['360','260','260','200']" data-voffset="['0','0','0','0']"
        data-responsive_offset="on"
        data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1300">
          <p>We are trusted by more than 2,500,000 allround the world
          </p>
        </div>
        <div class="tp-caption  tp-resizeme"  
         data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" 
          data-y="['410','310','290','180']" data-voffset="['0','0','0','0']"
        data-responsive_offset="on" data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1600">
            <a href="about.php" class="btn-border text-uppercase border_radius">About us
          </a>
          <a href="login.php" class="text-uppercase border_radius btn-blue">Get started
          </a>
        </div>
      </li>
      <li data-transition="fade">
          <img src="img/quality.jpg" alt="" data-bgposition="center center" data-bgfit="cover">
        <h1 class="tp-caption  tp-resizeme uppercase" 
          data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" 
          data-y="['290','190','190','100']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
          data-start="1000"><span class="blue_t"><h3>-<strong>Safe</strong></h3></span>
          <strong class="blue_t">And Safe
          </strong>
        </h1>
        <div class="tp-caption  tp-resizeme" 
        data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" 
        data-y="['360','260','260','200']" data-voffset="['0','0','0','0']"
        data-responsive_offset="on"
        data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1300">
          <p>We offer the most secured online banking and financial solution on the globe
          </p>
        </div>
        <div class="tp-caption  tp-resizeme"  
         data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']" 
         data-y="['410','310','290','180']" data-voffset="['0','0','0','0']"
        data-responsive_offset="on" data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1600">
            <a href="indexe47e-2e47e.php?a=about" class="btn-border text-uppercase border_radius">About us
          </a>
          <a href="register.php"  class="text-uppercase border_radius btn-blue">Register
          </a>
        </div>
      </li>
    </ul>

  </div>
</section>

<!--SLIDERR Ends-->



 <!--Three columns text Info-->
<section id="info" class="padding">
  <div class="container">
    <div class="row">
        <div class="col-sm-12 text-right wow fadeInDown" data-wow-delay="500ms">
       <div id="google_translate_element" style=" max-width: 100%; "></div>
      </div>
        
      <div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms">
        <h2 class="text-capitalize bottom10">Three Easy <span class="blue_t">Steps</span></h2>
        <p><?php echo $bname;?> limited bank to the world</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="text_box text-center top40 wow fadeIn" data-wow-delay="700ms"><a href="register.php"> 
          <span><i class="fa fa-user-plus"></i></span></a>
          <h4 class="bottom10">Create your person account</h4>
          <p>>Register your account with your personal information.</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="text_box text-center top40 wow fadeIn" data-wow-delay="900ms"><a href="register.php"></a> 
          <span><i class="fa fa-gift"></i></span></a>
          <h4 class="bottom10">Verification</h4>
          <p>We collect personal data to help stop fraud and for verification purposes</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="text_box  text-center top40 wow fadeIn" data-wow-delay="1100ms"><a href="login_%20%20%20%20%20%20%20%20%20%20%20_span__i%20class%3d.php"icon-bargraph"></i></span></a>
          <h4 class="bottom10">Online Banking</h4>
          <p> DEPOSITS, TRANSFERS, WITHDRAWALS in your account is quick fast and easy.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Info Text ends-->


<!--Good Plan-->
<section id="plans" class="padding light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 content_left">
        <figure>
          <img src="img/123.jpg" alt="Good Plans" class="img-responsive">
        </figure>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 content_right shadow  margin-bottom">
        <div id="plan_slider" class="owl-carousel">
          <div class="item">
            <span class="count bottom20 blue_bg">1</span>
            <h2 class="bottom10">INVESTMENT BANKING</h2>
            <p class="bottom20">Investment Banking provides comprehensive financial advisory, capital raising, financing and risk management services to corporations</p>
            <a href="about.php" class="btn-border text-uppercase border_radius">Read More</a>
          </div>
          <div class="item">
            <span class="count bottom20 blue_bg">2</span>
            <h2 class="bottom10">Discover our new 95% mortgage</h2>
            <p class="bottom20">We are making it easier for first time buyers to get on the property ladder. Available on property purchases.</p>
            <a href="indexe47e-2e47e.php?a=about" class="btn-border text-uppercase border_radius">Read More</a>
          </div>
          <div class="item">
            <span class="count bottom20 blue_bg">3</span>
            <h2 class="bottom10">Global Finance</h2>
            <p class="bottom20">Our M&A team works in partnership with coverage bankers in providing solutions, using a highly analytical approach, providing unique insights</p>
            <a href="about.php" class="btn-border text-uppercase border_radius">Read More</a>
          </div>
          <div class="item">
            <span class="count bottom20 blue_bg">4</span>
            <h2 class="bottom10">COVERED BY INSURANCE</h2>
            <p class="bottom20">You have zero chances of losing your assets with us as all our assets are duly covered by inssurance.</p>
            <a href="indexe47e-2e47e.php?a=about" class="btn-border text-uppercase border_radius">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--GOOD PLANS-->



 <!--Facts Counter & Grid-->
<section id="facts" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="wow fadeInDown" data-wow-delay="500ms">
          <h2 class="bottom10 text-capitalize">We offer <span class="blue_t">Financial Advice</span></h2>
          <p class="tagline heading_space">we offer the best financial advice and tools you need to feel more confident working with us.
          </p>
        </div>
    
      </div>
    </div>
    <div id="grid_layout" class="cbp cbp-l-grid-mosaic-flat">
      <div class="cbp-item">
        <a href="#" class="cbp-lightbox">
          <img src="img/122.jpg" alt="">
          <div class="overlay">
            <div class="overlay_inner">
                <h4><?php echo $bname;?></h4>
              <p><?php echo $bname;?></p>
            </div>
          </div>
        </a>
      </div>
      <div class="cbp-item">
        <a href="#" class="cbp-lightbox">
          <img src="img/123.jpg" alt="">
          <div class="overlay">
            <div class="overlay_inner">
              <h4><?php echo $bname;?></h4>
              <p><?php echo $bname;?></p>
            </div>
          </div>
        </a>
      </div>
      <div class="cbp-item">
        <a href="#" class="cbp-lightbox">
          <img src="ui/images/grid2.jpg" alt="">
          <div class="overlay">
            <div class="overlay_inner">
              <h4><?php echo $bname;?></h4>
              <p><?php echo $bname;?></p>
            </div>
          </div>
        </a>
      </div>
      <div class="cbp-item">
        <a href="#" class="cbp-lightbox">
            <img src="img/12345.jpg" alt="" style="width: 269px; height: 180px;">
          <div class="overlay">
            <div class="overlay_inner">
              <h4><?php echo $bname;?></h4>
              <p><?php echo $bname;?></p>
            </div>
          </div>
        </a>
      </div>
      <div class="cbp-item">
        <a href="#" class="cbp-lightbox">
          <img src="ui/images/grid5.jpg" alt="">
          <div class="overlay">
            <div class="overlay_inner">
              <h4><?php echo $bname;?></h4>
              <p><?php echo $bname;?></p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!--Facts & Fun ends-->

<!--Video-->
<section id="bg-video" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 video wow fadeInLeft" data-wow-delay="500ms"> 
        <img src="img/12345.jpg" alt="video">

      </div>
      <div class="col-sm-6 right_content top40 bottom40 wow fadeInRight" data-wow-delay="500ms">
        <h2 class="bottom30 text-capitalize">About  <span class="blue_t"><?php echo $bname;?></span></h2>
        <p class="bottom30"><?php echo $bname;?> is an International online banking company, officially registered in US, it was launched in October 2008. The company has direct contracts with professional bankers and  best secured banking system around the world that guarantees the best services and ensures good security to our clients</p>
        <p class="bottom30">Join us today and get the best .</p>
        <p class="bottom30">Our M&A team works in partnership with coverage bankers in providing solutions, using a highly analytical approach, providing unique insights..</p>
        <a href="about.php" class="btn-white text-uppercase border_radius">More About us</a>
      </div>
    </div>
  </div>
</section>
<!--Video Ends-->

<section id="info" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center wow fadeInDown"> 
        <h2 class="text-capitalize bottom10">Why <span class="blue_t">Chose us</span></h2>
        <p class="heading_space">With our innovative workers, you have many more reasons to chose us.</p>
      </div>
    </div>
    <div class="row info">
      <div class="col-sm-4 icon_box text-center first wow fadeIn" data-wow-delay="500ms">
        <i class="icon-lock bottom20"></i>
        <h4 class="bottom10">SAFE AND SECURE</h4>
        <p>Trade with 100% peace of mind as we have the best system security team onboard.</p>
      </div>
      <div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="600ms">
        <i class="fa fa-bolt bottom20"></i>
        <h4 class="bottom10">SPEED</h4>
        <p>With our lightning speed servers, you are sure to get the best out of online banking.</p>
      </div>
      <div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="700ms">
        <i class="icon-layers bottom20"></i>
        <h4 class="bottom10">PROGRESSIVE REVENUE</h4>
        <p>Watch your accruals grow in real time and monitor how much revenue is being generated for you..</p>
      </div>
      <div class="col-sm-4 icon_box text-center first wow fadeIn" data-wow-delay="800ms">
        <i class="fa fa-users bottom20"></i>
        <h4 class="bottom10">INVESTMENT FOR ALL</h4>
        <p>With different packages, Our system is modelled to accommodate everyone no matter how much you have to invest.</p>
      </div>
      <div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="900ms">
        <i class="fa fa-shield bottom20"></i>
        <h4 class="bottom10">COVERED BY INSURANCE</h4>
        <p>You have zero chances of losing your investments as all our assets are duly covered by insurance..</p>
      </div>
      <div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="1000ms">
        <i class="fa fa-bitcoin bottom20"></i>
        <h4 class="bottom10">QUICK TRANSACTION</h4>
        <p>Join in the world's most popular online banking and enjoy all the benefits that come with it.</p>
      </div>
    </div>
  </div>
</section>

 <!--Meet the Team-->
<section id="team" class="pricesection padding-top padding-bottom-half light">
        <div class="row">
      <div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms">
        <h2 class="bottom10 text-capitalize">We offer different types of <span class="blue_t">Accounts</span></h2>
        <p class="heading_space">To Suit your demands.</p>
      </div>
    </div>
  <div class="pricing pricing-palden ">
    
            
      <div class="pricing-item">
      <div class="pricing-deco">
        <svg class="pricing-deco-img" enable-background="new 0 0 300 50" height="50px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 50" width="400px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
          <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
          <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
          <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
          <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
          
          <!--  M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z  -->
        </svg>
        <div class="pricing-price ">
        Savings <br>
        </div>
        <h3 class="pricing-title">Account</h3>
      </div>
          <ul class="pricing-feature-list " style="padding-top: -100px !important;">
          <li class="pricing-feature">Student Account</li>
          <li class="pricing-feature">Fixed Deposit</li>
          <li class="pricing-feature">Enhanced Security</li>

      </ul>
        <button style="cursor: pointer;" onclick="window.location.href="login" class="pricing-action">Get Started</button>
    </div>
         
      <div class="pricing-item">
      <div class="pricing-deco">
          
        <svg class="pricing-deco-img" enable-background="new 0 0 300 50" height="50px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 50" width="400px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
          <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
          <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
          <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
          <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
          
          <!--  M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z  -->
        </svg>
        
        <div class="pricing-price ">
        Current
        <br> 
        </div>
        <h3 class="pricing-title">account</h3>
      </div>
          <ul class="pricing-feature-list " style="padding-top: -100px !important;">
          
          <li class="pricing-feature"> Premium Savings </li>
          <li class="pricing-feature"> Business Account </li>
          <li class="pricing-feature">Enhanced Security</li>

      </ul>
        <button style="cursor: pointer;" onclick="window.location.href="login" class="pricing-action">Get Started</button>
    </div>
         
      <div class="pricing-item">
      <div class="pricing-deco">
          
        <svg class="pricing-deco-img" enable-background="new 0 0 300 50" height="50px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 50" width="400px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
          <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
          <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
          <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
          <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
          
          <!--  M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z  -->
        </svg>
        
        <div class="pricing-price ">
    Checking<br> 
        </div>
        <h3 class="pricing-title"> account</h3>
      </div>
          <ul class="pricing-feature-list " style="padding-top: -100px !important;">
          <li class="pricing-feature">Paychecks</li>
          <li class="pricing-feature"> Salary account</li>
          <li class="pricing-feature"> 3-5 Processing</li>
          <li class="pricing-feature">Enhanced Security</li>
 
      </ul>
        <button style="cursor: pointer;" onclick="window.location.href="login" class="pricing-action">Get Started</button>
    </div>
         

                  
    
            
       
    
      
      
  </div>
    
    
</section>
 <!--Meet the TEAM ends-->
 
    
 <!--Call Back Form-->
<section class="parallax_one padding">
  <div class="container">
    <div class="row">
        <div class="col-md-6 " >
           <div class="btcwdgt-chart" bw-theme="light">
          <script data-cfasync="false" src="ui/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
          
          <script>
								 (function(b,i,t,C,O,I,N) {
									  window.addEventListener('load',function() {
									  if(b.getElementById(C))return;
									  I=b.createElement(i),N=b.getElementsByTagName(i)[0];
									  I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
									},false)
								  })(document,'script','ui/js/widget.js','btcwdgt');
								</script>
                                                                </div>
      </div>
     
                
                <div class="col-sm-12 form-group">
                <div class="select border_radius">
                  <select id="typez">
                      <option value="">Select Type</option>
                    <option value="0">Investment</option><option value="1">Banking</option>                  </select>
                </div>
              </div>
                
              <div class="col-sm-12 form-group">
                <div class="select border_radius">
                  <select id="discuss">
                      <option value="">Select Source</option>
                    <option value="btc">SECURED</option>                  </select>
                </div>
                <button type="submit" class="btn-blue top10 border_radius text-uppercase">Submit</button>
              </div>
                <div class="col-md-12"><h5 class="text-white mt-5" id="profit"></h5></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
 <!--Call Form Ends--> 
 
 
 
   
<!--People Saying-->
<section id="people" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms">
        <h2 class="bottom10 text-capitalize">What people are <span class="blue_t">Saying</span></h2>
        <p class="heading_space">We are trusted by thousands of users across the globe.</p>
      </div>
    </div>
    <div id="people_slider" class="owl-carousel">
        
              <div class="item">
        <div class="people_wrap border_radius right">
        <i class="icon-quotes-right"></i>
        <p>This company is really a reliable company. Their system is very automated.</p>
        </div>
        <div class="testinomial_pic text-right pull-right">
            <div class="pic"><img alt="testinomial" src="ui/user/images/profile.png" style="width: 58px;"></div>
          <div class="testinomial_body">
            <span class="name">- Steve K,</span>
            <span class="post_img">Verified Client</span>
          </div>
        </div>
      </div>
        
        
              <div class="item">
        <div class="people_wrap border_radius right">
        <i class="icon-quotes-right"></i>
        <p>It's really wonderful. I would also like to say thank you to all your staff. <?php echo $bname;?> did exactly what you said it does.</p>
        </div>
        <div class="testinomial_pic text-right pull-right">
            <div class="pic"><img alt="testinomial" src="ui/user/images/profile.png" style="width: 58px;"></div>
          <div class="testinomial_body">
            <span class="name">- Carilyn E</span>
            <span class="post_img">Verified Client</span>
          </div>
        </div>
      </div>
        
        
              <div class="item">
        <div class="people_wrap border_radius right">
        <i class="icon-quotes-right"></i>
        <p>All my withdrawal from <?php echo $bname;?> are instantly processed. No pending withdrawals.</p>
        </div>
        <div class="testinomial_pic text-right pull-right">
            <div class="pic"><img alt="testinomial" src="ui/user/images/profile.png" style="width: 58px;"></div>
          <div class="testinomial_body">
            <span class="name">- Chrisanto</span>
            <span class="post_img">Verified Client</span>
          </div>
        </div>
      </div>
        
        
              <div class="item">
        <div class="people_wrap border_radius right">
        <i class="icon-quotes-right"></i>
        <p>This company have a very responsive customer service.  All information I need are being given to me instantly. I never regret investing with <?php echo $bname;?> </p>
        </div>
        <div class="testinomial_pic text-right pull-right">
            <div class="pic"><img alt="testinomial" src="ui/user/images/profile.png" style="width: 58px;"></div>
          <div class="testinomial_body">
            <span class="name">- Althea Shawn,</span>
            <span class="post_img">Verified Client</span>
          </div>
        </div>
      </div>
        
        
              <div class="item">
        <div class="people_wrap border_radius right">
        <i class="icon-quotes-right"></i>
        <p>All my withdrawal are being sent to my wallet instantly..  No delay and no hidden charges. Thank you <?php echo $bname;?>.</p>
        </div>
        <div class="testinomial_pic text-right pull-right">
            <div class="pic"><img alt="testinomial" src="ui/user/images/profile.png" style="width: 58px;"></div>
          <div class="testinomial_body">
            <span class="name">- Amah khan, </span>
            <span class="post_img">Verified Client</span>
          </div>
        </div>
      </div>
        
        
   
        
        
              
      
      
      
      
    </div>
  </div>
</section>
<!--People Saying ends-->


<!--News & Thoughts-->
<section id="news" class="padding light layout_third">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms">
        <h2 class="bottom10 text-capitalize">What We <span class="blue_t">Offer </span></h2>
        <p class="heading_space">We’re building a new standard for crypto trading. One account, one balance, streamlined access to multiple liquidity venues.</p>
      </div>
    </div>
    <div class="row">
      <div id="news_slider" class="owl-carousel">
        <div class="item">
          <div class="news">
            <div class="image"><img src="ui/images/1213.jpg" alt="News"></div>
            <div class="news_text">
              <h4 class="bottom10"><a href="news.php">Trading</a></h4>
              <p class="bottom30">Our goal is to provide one of the deepest and widest liquidity pools in the crypto market. We strive to accomplish this by aggregating liquidity from multiple connected venues like exchanges.</p>

            </div>
          </div>
        </div>
        <div class="item">
          <div class="news">
            <div class="image"><img src="ui/images/12333.jpg" alt="News"></div>
            <div class="news_text">
              <h4 class="bottom10"><a href="news.php">Investment</a></h4>
              <p class="bottom30">For the crypto assets in your account, we use BitGo custodial services and applications. BitGo is trusted by institutions in the digital assets industry for security, compliance and custodial solutions.</p>

            </div>
          </div>
        </div>
        <div class="item">
          <div class="news">
              <div class="image"><img src="img/123456.jpg" alt="News" style="width: 360px; height: 210px;"></div>
            <div class="news_text">
              <h4 class="bottom10"><a href="#">Book an appointment</a></h4>
              <p class="bottom30">You can now book an appointment online. Existing customers may prefer to log on to Online Banking to make booking even simple </p>

            </div>
          </div>
        </div>
          
          <div class="item">
          <div class="news">
              <div class="image"><img src="ui/images/11221.jpg" alt="News" style="width: 360px; height: 210px;"></div>
            <div class="news_text">
              <h4 class="bottom10"><a href="news.php">Loan</a></h4>
              <p class="bottom30">Our aim is to simplify access to the crypto markets by letting our brokerage customers use the buying power from a single account to access liquidity from all of our connected venues.</p>

            </div>
          </div>
        </div>
        
        
        
        
        
        
        
        
      </div>
    </div>
    
    <div class="row">
        
      <div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms">
          <br/><br/>
      
        
      </div>
    </div>
   
        </div>
      </div>
    </div>
  </div>


</table>
    
  </div>
</section>
<!--News & Thoughts ends-->
    
    
 <!--Partners-->
<section id="partner" class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms">
        <h2 class="bottom10 text-capitalize">Be Our <span class="blue_t">Partners</span></h2>
        <p class="heading_space">Are you passionate about working with us? We are glad to let you know that we will always welcome you with an open arm ready to work with you in the best way</p>
      </div>
    </div>
 
  </div>
</section>
<!--Partner Ends-->



    
    <!--Footer-->



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
        <h5><strongBank Address: 261 NW 46TH ct CITY FL 33309 </h5>
      </div>
    </div>
  </div>
</div>
  <footer class="footer_top padding-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 footer_panel heading_space">
               <a class="navbar-brand" href="index-2.php">
                <img src="img/pplogo.png" width="200px" />
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
            <li><a href="index-2.php"><i class="icon-chevron-small-right"></i>Home</a></li>
            <li><a href="about.php"><i class="icon-chevron-small-right"></i>Company</a></li>
            
            <li><a href="faq.php"><i class="icon-chevron-small-right"></i>FAQ</a></li>
            
            <li><a href="contact.php"><i class="icon-chevron-small-right"></i>Contact Us</a></li>
          <li><a href="login.php"><i class="icon-chevron-small-right"></i>Start Banking</a></li>
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

<!-- Mirrored from <?php echo $bname;?>/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:12:04 GMT -->
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
