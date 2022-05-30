<?php include "./include/header.php" ?>

            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li class="active">Login Register</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="containTaikhoan">
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                            <!-- Login Form s-->
                            <form action=""  method="post" name="formDangNhap" onsubmit="return checkDangNhap();" >
                                <div class="login-form">
                                    <h4 class="login-title">Login</h4>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>User Name*</label>
                                            <input name="username" id="username" class="mb-0" type="text" placeholder="User Name">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Password</label>
                                            <input  name="pass" id="pass" class="mb-0" type="password" placeholder="Password">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                                <input type="checkbox" id="remember_me">
                                                <label for="remember_me">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                            <a href="#"> Forgotten pasward?</a>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="register-button mt-0">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="" method="post" name="formDangKy" onsubmit="return checkDangKy();">
                                <div class="login-form">
                                    <h4 class="login-title">Register</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>First Name</label>
                                            <input name="ten" id="ten" required  class="mb-0" type="text" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Last Name</label>
                                            <input name="ho" id="ho" required class="mb-0" type="text" placeholder="Last Name">
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Phone*</label>
                                            <input name="sdt" id="sdt" class="mb-0" type="number" placeholder="Phone">
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Email Address*</label>
                                            <input  name="email" id="email" class="mb-0" type="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>User Name</label>
                                            <input  name="newUser" id="newUser" class="mb-0" type="text" placeholder="User Name">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Password</label>
                                            <input name="newPass" id="newPass" class="mb-0" type="password" placeholder="Password">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Confirm Password</label>
                                            <input name="confNewPass" id="confNewPass" class="mb-0" type="password" placeholder="Confirm Password">
                                        </div>
                                    
                                        <div class="col-12">
                                            <button type="submit" class="register-button mt-0">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Login Content Area End Here -->
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
    </body>

<!-- login-register31:27-->
</html>
