<?php include "./include/header.php" ?>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li class="active">Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Checkout Area Strat-->
            <div class="checkout-area pt-60 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <form action="#">
                                <div class="checkbox-form">
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Name <span class="required">*</span></label>
                                                <input id="nameOrder" placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input id="addressOrder" placeholder="Street address" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input id="emailOrder" placeholder="" type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Phone  <span class="required">*</span></label>
                                                <input id="phoneOrder" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="your-order">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <div id="itemOrder"></div>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div id="accordion">
                                          <div class="card">
                                            <div class="card-header" id="#payment-1">
                                              <h5 class="panel-title">
                                                <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Direct Bank Transfer.
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                              <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card">
                                            <div class="card-header" id="#payment-2">
                                              <h5 class="panel-title">
                                                <a class="collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  Cheque Payment
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                              <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card">
                                            <div class="card-header" id="#payment-3">
                                              <h5 class="panel-title">
                                                <a class="collapsed" href="" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  PayPal
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                              <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input onClick="placeOrder()" value="Place order" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Checkout Area End-->
            <!-- Begin Footer Area -->
            <?php include "./include/footer.php" ?>
            <!-- Footer Area End Here -->
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
        <!-- Main/Activator js -->
        <script src="../public/js/main.js"></script>
        <script type="text/javascript" src="../public/jsAjax/header.js?15000"></script>
        <script type="text/javascript" src="../public/jsAjax/checkout.js?15000"></script>
    </body>

<!-- checkout31:27-->
</html>
