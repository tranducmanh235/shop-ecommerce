<?php require_once "view/include/topBannerHome.php";
session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">
    
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo isset($page_title) ? $page_title : "shop-ecommerce"; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="public/images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="public/css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="public/css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="public/css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="public/css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="public/css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="public/css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="public/css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="public/css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="public/css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="public/css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="public/css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="public/css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="public/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="public/css/responsive.css">
        <!-- Modernizr js -->
        <link rel="stylesheet" href="public/css/index.css">
        <link rel="stylesheet" href="public/css/user.css">
        <script src="public/js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="public/lib/ion.rangeSlider-2.2.0/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="public/lib/ion.rangeSlider-2.2.0/css/ion.rangeSlider.skinHTML5.css">
        <script src="public/lib/Jquery/Jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	    <script src="public/lib/ion.rangeSlider-2.2.0/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
        <script src="public/jsAjax/ajaxHome.js"></script>
        <script src="public/jsAjax/registerLoginHome.js"></script>
        <script src="public/jsAjax/searchHeaderHome.js"></script>
        <script type="text/javascript" src="public/jsAjax/dungchung.js"></script>
        <script type="text/javascript" src="public/jsAjax/headerHome.js?15000"></script>
        
        <?php require_once "view/include/showSale.php"; ?>
    </head>
    <body>
       
        <div class="body-wrapper">
          
        <?php include "view/include/headerHome.php" ?>
           
            <?php topBannerHome(); ?>
           
            <?php showSaleProducts(); ?>
           
            <!-- Li's Trending Product Area End Here -->
             <!-- Li's Trendding Products Area End Here -->
            <!-- Begin Footer Area -->
        <?php include "view/include/footerHome.php" ?>
        <!-- <script src="public/js/vendor/jquery-1.12.4.min.js"></script> -->
        <!-- Popper js -->
        <script src="public/js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="public/js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="public/js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="public/js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="public/js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="public/js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="public/js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="public/js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="public/js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="public/js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="public/js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="public/js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="public/js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="public/js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="public/js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="public/js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="public/js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="public/js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="public/js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="public/js/main.js"></script>
    
    </body>

<!-- index30:23-->
</html>