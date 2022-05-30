
<?php include "./include/header.php" ?>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li class="active">Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Shopping Cart Area Strat-->
            <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <div id="listcard"></div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                                <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                            </div>
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Update cart" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal <span class="sub-total-amount">$0.00</span></li>
                                                <li>Total <span class="total-amount">$0.00</span></li>
                                            </ul>
                                            <a href="#" onClick="eventCheckOut()">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shopping Cart Area End-->
            <!-- Begin Footer Area -->
           
        <?php include "./include/footer.php" ?>
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="../public/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="../public/js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="../public/js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="../public/js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="../public/js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="../public/js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="../public/js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="../public/js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="../public/js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="../public/js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="../public/js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="../public/js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="../public/js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="../public/js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="../public/js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="../public/js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="../public/js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="../public/js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="../public/js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="../public/js/scrollUp.min.js"></script>

        <script type="text/javascript" src="../public/jsAjax/addToCard.js?15000"></script>
        <!-- Main/Activator js -->
        <script src="../public/js/main.js"></script>
        
    </body>

<!-- shopping-cart31:32-->
</html>
