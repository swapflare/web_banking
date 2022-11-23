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


<!-- Mirrored from <?php echo $bname;?>/about by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:12:17 GMT -->
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

<section class="page_header">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <p>Who We Are</p>
          <h1 class="text-uppercase"> About Us</h1>
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
            <li class="active">About Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <!--About Us-->
  <section id="about" class="padding-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 padding-bottom"> 
            <img src="ui/images/about.jpg" alt="About Us" class="img-responsive"> 
        
        </div>
        <div class="col-sm-6 about_right padding-bottom">
          <h2 class="bottom10">More About<span class="blue_t"> us</span></h2>
          <p><strong> <?php echo $bname;?> ’s innovative platforms and tools provide the power and reliability you need to feel more confident in your investment, trading and loan access.</strong></p>
          <p class="bottom30"> <?php echo $bname;?>  is an International Investment company, officially registered in UK, it was launched in October 2015. The company has direct contracts with professional traders and miners around the world that guarantees the best services and ensures profits are made and remitted to investors daily.</p>
          <p class="bottom30">It was established by a group of professional traders and investors, who have fore seen the future of crytpo currency.</p>
          <p class="bottom30"> <?php echo $bname;?>  is founded on the principle that cryptocurrencies is changing the fundamental structure of not only our economy and banking systems but also the way we connect and engage as human beings.</p>
          <p class="bottom30">Our desktop, web, and mobile platforms put powerful tools into the hands of traders and investors – helping to level the playing field in the competitive world of trading and investing.
  With more than 30 years of industry experience, we have the tools and support you need.</p>
          <!--ul class="check">
            <li><i class="icon-check"></i>Mei an pericula euripidis, hinc partem ei est.</li>
            <li><i class="icon-check"></i>Eos ei nisl graecis acer sell well.</li>
            <li><i class="icon-check"></i>Alienum phaedrum torquatos lorem fact.</li>
          </ul-->
         
        </div>
      </div>
    </div>
  </section>
  
  <!--Meet the Team--
  <section id="team" class="padding grey_light">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2 class="bottom10 text-capitalize">Meet Our <span class="blue_t">Team</span></h2>
          <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros Sed ornare ligula eget tortor tempor.</p>
        </div>
        <div class="col-sm-4">
          <div class="team_wrap top40">
            <div class="image heading_space"> <img src="/ui/images/team1.jpg" alt="our Team">
              <div class="list_content">
                <ul class="team_social">
                  <li><a href="#"><i class="icon-euro"></i></a></li>
                  <li><a href="#"><i class="icon-twitter5"></i></a></li>
                  <li><a href="#"><i class="icon-instagram"></i></a></li>
                </ul>
              </div>
            </div>
            <h3>Ellizabeth Taylor</h3>
            <span class="bottom20">Founder & Chief</span>
            <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula Progressively generate synergistic eget.</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team_wrap top40">
            <div class="image heading_space"> <img src="/ui/images/team2.jpg" alt="our Team">
              <div class="list_content">
                <ul class="team_social">
                  <li><a href="#"><i class="icon-euro"></i></a></li>
                  <li><a href="#"><i class="icon-twitter5"></i></a></li>
                  <li><a href="#"><i class="icon-instagram"></i></a></li>
                </ul>
              </div>
            </div>
            <h3>Neal Collins</h3>
            <span class="bottom20">Vice President</span>
            <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula Progressively generate synergistic eget.</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team_wrap top40">
            <div class="image heading_space"> <img src="/ui/images/team3.jpg" alt="our Team">
              <div class="list_content">
                <ul class="team_social">
                  <li><a href="#"><i class="icon-euro"></i></a></li>
                  <li><a href="#"><i class="icon-twitter5"></i></a></li>
                  <li><a href="#"><i class="icon-instagram"></i></a></li>
                </ul>
              </div>
            </div>
            <h3>Jacqueline Huet</h3>
            <span class="bottom20">Creative Chief</span>
            <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula Progressively generate synergistic eget.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  --Team ends-->
  
  
  <!--Quality Fine-->
  <section id="quality" class="padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Security Comes First</h2>
          <p class="heading_space">Your security and trust are important to us. We're committed to protecting your account with the highest standards of security available..</p>
        </div>
        <div class="clearfix"></div>
        <div class="quality_wrap clearfix">
          <div class="col-md-6">
            <div class="left"> <img src="ui/images/quality.jpg" alt="quality"> </div>
          </div>
          <div class="col-md-6">
            <div class="right">
              <div class="media">
                <div class="media-left">
                  <div class="media-object"><span>1</span></div>
                </div>
                <div class="media-body">
                  <h4 class="bottom10">We Are Trusted</h4>
                  <p class="bottom15">Over $5B and counting - More than 175,000 people trust over $5 billion with  <?php echo $bname;?>  companies.</p>
                </div>
              </div>
              <div class="media">
                <div class="media-left">
                  <div class="media-object"><span>2</span></div>
                </div>
                <div class="media-body">
                  <h4 class="bottom10">Strong Encryption</h4>
                  <p class="bottom15">Everything is encrypted - We use state-of-the-art data encryption when handling your financial information.</p>
                </div>
              </div>
              <div class="media">
                <div class="media-left">
                  <div class="media-object"><span>3</span></div>
                </div>
                <div class="media-body">
                  <h4 class="bottom10">Powerful backing</h4>
                  <p>Powerful backing -  <?php echo $bname;?>  is backed by $265M in investment from some of the world's largest financial institutions.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Quality fine ends-->
  
  
  <!--What We DO-->
  <section id="wedo" class="padding-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>What We<span class="blue_t"> Do</span></h2>
          <p class="heading_space">We’re building a new standard for crypto trading. One account, one balance, streamlined access to multiple liquidity venues..</p>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6">
          <div class="accordion-container bottom40">
            <div class="accordion_title"> <a href="javascript:void(0)" class="active">Investment<i class="fa fa-plus"></i></a>
              <div class="content" style="display:block;">
                  <p class="bottom20"> <?php echo $bname;?>  redefines the way we live; from "being smart" to "being wise". Our vision is to build a strong alliance and lasting partnership with our investors. A platform connecting individuals to create a community based on technology.</p>
                <p class="bottom0"> <?php echo $bname;?>  as an investment project does not operate like the banking system nor HYIP. Funds deposited are allocated to different sectors of the company's Investment strategy.</p>
              </div>
            </div>
            <div class="accordion_title"> <a href="javascript:void(0)">Trading<i class="fa fa-plus"></i></a>
              <div class="content">
                <ul class="check">
            <li><i class="icon-check"></i>Investors receive their earnings daily.</li>
            <li><i class="icon-check"></i>Withdrawals are made at intervals and you have the option to reinvest after the completion of your trading cycle..</li>
            <li><i class="icon-check"></i>We also offer consultancy on Trading strategy.</li>
            
          </ul>
              </div>
            </div>
            <!--div class="accordion_title"> <a href="javascript:void(0)">A Low Interest loan access<i class="fa fa-plus"></i></a>
              <div class="content">
                <p class="bottom20">For all our investors and traders, we have provided a golden opportunity for them to have access to low interest loans that could aid in financing of businesses and other personal needs.</p>
                <p class="bottom0">We made this loan system available as a way to show appreciation to our investors and traders and help bootstrap their businesses.</p>
              </div>
            </div-->
          </div>
        </div>
        <div class="col-md-6">
          <div class="do_media media bottom40">
              <div class="welcocme_certificate">What We Do</div>
            <div class="media-body">
              <h4 class="bottom10">Always Available</h4>
              <p class="heading_space">Our desktop, web, and mobile platforms put powerful tools into the hands of traders and investors – helping to level the playing field in the competitive world of trading and investing.</p>
  
              <ul class="check">
            <li><i class="fa fa-check-square-o"></i> Utilize real-time market data and order execution technology.</li>
            <li><i class="fa fa-check-square-o"></i> Access multiple Investment classes, including  Crypto, Stocks and Options.</li>
            <li><i class="fa fa-check-square-o"></i> Our trading systems have a 99.999% uptime accuracy.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--We Do ends-->
  
  <!--Contact Info-->
  
      <!--Contact Info-->
  



  
<div class="container bg_contact bg_one border_radius wow bounceInUp" data-wow-delay="500ms">
  <div class="row ">
    <div class="col-sm-4">
      <div class="contact_inner">
        <i class="icon-phone4"></i>
        <h5><strong>Email us : <a href="href%3d.php"mailto:<?php echo $email;?>"><span class="__cf_email__" data-cfemail="0d7e787d7d627f794d7e6674797f787e7923626361646368">[email&#160;protected]</span></a></strong></h5>
        
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
               
        <a class="navbar-brand alo" href="index.php"> <p <span class="blue_t"><strong><?php echo $bname;?></strong></span></a></p>
      
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

<!-- Mirrored from <?php echo $bname;?>/about by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:12:22 GMT -->
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
