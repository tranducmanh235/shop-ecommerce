
            <header>
                <!-- Begin Header Top Area -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span>Hỗ trợ:</span><a href="#"> 033.691.0404</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class="col-lg-9 col-md-8">
                                <div class="header-top-right">
                                <div class="member">
                                <a onclick="checkTaiKhoan()" id="btnTaiKhoan"  href="./view/login-register.php"><i class="fa fa-user"></i> Tài khoản</a>
      
                                <div class="menuMember hide">
                                <a href="./view/user.php">Trang người dùng</a>
                                <a onclick="checkDangXuat();">Đăng xuất</a>
                                </div> 
                                </div>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index.php">
                                        <img src="./public/images/menu/logo/1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form method="get" action="index.php" class="hm-searchbox">
                                    <select id="tags"  onchange="window.location = this.value;">
                                        <option class="all-first">Tất cả</option>  
                                                            
                                    </select>
                                   
                                    <input name="search" type="text" placeholder="Enter your search key ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class="hm-wishlist">
                                            <a href="./view/wishlist.php">
                                                <span id="numberWishList" class="cart-item-count wishlist-item-count">0</span>
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </li>
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">
                                                    <span class="total-minicard">$0.00</span>
                                                    <span class="cart-item-count quantity-minicard cart-number">0</span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class="minicart" style="z-index: 1001">
                                                <div class="show-minicard"></div>
                                              
                                                <p class="minicart-total">Tổng thanh toán: <span class="subtotal-minicard">$0.00</span></p>
                                                <div class="minicart-button">
                                                    <a href="./view/shopping-cart.php" class="li-button li-button-fullwidth li-button-dark">
                                                        <span>Xem hết giỏ hàng</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu">
                                    <nav>
                                        <ul>
                                            <li class="homepage " style="font-weight:bold"><a href="index.php">HOME</a>
                                             
                                            </li>
                                            <li class="megamenu-holder"><a href="./view/shop.php">SHOP</a>
                                    
                                            </li>
                                            <li class="dropdown-holder"><a href="./view/blog.php">Blog</a>
                        
                                            </li>
                    
                                            <li><a href="./view/about-us.php">ABOUT US</a></li>
                                            <li style="padding-left:20px ;"><a href="./view/contact.php">CONTACT</a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
