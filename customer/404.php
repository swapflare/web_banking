<?php
session_start();
error_reporting(0);
include("../config/dbconfig.php");
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="A digitalized banking software">

<meta name="keywords" content="Ibank, piggybank">

<script src="../assets/js/custom/sweetalert.min.js"></script>

<!-- /meta tags -->

<title><?php echo $_SESSION[customername]; ?></title>



<!-- Site favicon -->

<link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">

<!-- /site favicon -->



<!-- Font Icon Styles -->

<link rel="stylesheet" href="../assets/node_modules/flag-icon-css/css/flag-icon.min.css">

<link rel="stylesheet" href="../assets/vendors/gaxon-icon/styles.css">

<!-- /font icon Styles -->



<!-- Perfect Scrollbar stylesheet -->

<link rel="stylesheet" href="../assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css">

<!-- /perfect scrollbar stylesheet -->



<!-- Load Styles -->    <link rel="stylesheet" href="../assets/css/light-style-1.min.css">
<!-- Load Styles -->    <link rel="stylesheet" href="../assets/css/style.min.css">

    <!-- /load styles -->



</head>

<body class="dt-sidebar--fixed dt-header--fixed">

<!-- Loader -->
<div class="dt-loader-container">
  <div class="dt-loader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
  </div>
</div>
<!-- /loader -->
<!-- Root -->
<div class="dt-root">
    <div class="dt-root__inner">

        <!-- Login Container -->
        <div class="dt-page--container">

            <!-- 404 Page -->
            <div class="error-page text-center">

                <!-- Title -->
                <h1 class="title">404</h1>
                <!-- /title -->

                <p class="display-2 text-dark mb-7">Sorry! The page not found</p>
                <p class="mb-10">The Link You Clicked Is Probably Broken, or the page has expired.</p>

                <!-- Search Box -->
                <form class="search-box right-side-icon">
                    <input class="form-control form-control-lg" type="search" id="address" name="address"
                           placeholder="Search in app...">
                    <button type="submit" class="search-icon"><i class="icon icon-search icon-lg"></i></button>
                </form><br>
                <!-- /search box -->
<a href="dashboard.php"> <button class="btn btn-success">Go Back </button></button>
        	       
                <!---->

            </div>
            <!-- /404 page -->

        </div>
        <!-- /login container -->
    </div>

</div>
<!-- /root -->

<!-- Optional JavaScript -->
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/moment/moment.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- Perfect Scrollbar jQuery -->
<script src="../node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<!-- /perfect scrollbar jQuery -->

<!-- masonry script -->
<script src="../node_modules/masonry-layout/dist/masonry.pkgd.min.js"></script>
<script src="../node_modules/sweetalert2/dist/sweetalert2.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/customizer.js"></script><!-- Custom JavaScript -->
<script src="assets/js/script.js"></script>

</body>
</html>

<?php include'footer.php' ?>