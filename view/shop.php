
<?php include "./include/header.php" ?>
<link rel="stylesheet" href="../public/css/shop.css">
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li class="active">Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Content Wraper Area -->
            <div class="content-wraper pt-60 pb-60 pt-sm-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-1 order-lg-2">
                            <!-- Li's Banner Area End Here -->
                            <!-- shop-top-bar start -->
                            <div class="shop-top-bar">
                                <div class="shop-bar-inner">
                                    <div class="product-view-mode">
                                        <!-- shop-item-filter-list start -->
                                        <ul class="nav shop-item-filter-list" role="tablist">
                                            <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                        </ul>
                                        <!-- shop-item-filter-list end -->
                                    </div>
                                    <div class="toolbar-amount">
                                        <span>Showing 1 to 9 of 15</span>
                                    </div>
                                </div>
                                <!-- product-select-box start -->
                                <div class="product-select-box">
                                    <div class="product-short">
                                        <p>Sort By:</p>
                                        <select class="nice-select" onChange="filterShop(this.value)">
                                            <option value="0">Relevance</option>
                                            <option value="1">Name (A - Z)</option>
                                            <option value="2">Name (Z - A)</option>
                                            <option value="3">Price (Low &gt; High)</option>
                                            <option value="4">Price (High &gt; Low)</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- product-select-box end -->
                            </div>
                            <!-- shop-top-bar end -->
                            <!-- shop-products-wrapper start -->
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                        <div class="product-area shop-product-area">
                                                <div class="list-products row"></div>
                                                
                                        </div>
                                    </div>
                                    
                                    <div class="paginatoin-area">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 pt-xs-15">
                                                <p>Showing 1-12 of 13 item(s)</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul class="pagination-box pt-xs-20 pb-xs-15">
                                                    <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i> Previous</a>
                                                    </li>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li>
                                                      <a href="#" class="Next"> Next <i class="fa fa-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop-products-wrapper end -->
                        </div>
                        <div class="col-lg-3 order-2 order-lg-1">
                            <!--sidebar-categores-box start  -->
                            <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
                                <div class="sidebar-title">
                                    <h2>Laptop</h2>
                                </div>
                                <!-- category-sub-menu start -->
                                <div class="category-sub-menu">
                                    <ul>
                                        <li class="has-sub"><a href="# ">Prime Video</a>
                                            <ul>
                                                <li><a href="#">All Videos</a></li>
                                                <li><a href="#">Blouses</a></li>
                                                <li><a href="#">Evening Dresses</a></li>
                                                <li><a href="#">Summer Dresses</a></li>
                                                <li><a href="#">T-Rent or Buy</a></li>
                                                <li><a href="#">Your Watchlist</a></li>
                                                <li><a href="#">Watch Anywhere</a></li>
                                                <li><a href="#">Getting Started</a></li>  
                                            </ul>
                                        </li>
                                        <li class="has-sub"><a href="#">Computer</a>
                                            <ul>
                                                <li><a href="#">TV & Video</a></li>
                                                <li><a href="#">Audio & Theater</a></li>
                                                <li><a href="#">Camera, Photo</a></li>
                                                <li><a href="#">Cell Phones</a></li>
                                                <li><a href="#">Headphones</a></li>
                                                <li><a href="#">Video Games</a></li>
                                                <li><a href="#">Wireless Speakers</a></li> 
                                            </ul>
                                        </li>
                                        <li class="has-sub"><a href="#">Electronics</a>
                                            <ul>
                                                <li><a href="#">Amazon Home</a></li>
                                                <li><a href="#">Kitchen & Dining</a></li>
                                                <li><a href="#">Bed & Bath</a></li>
                                                <li><a href="#">Appliances</a></li>    
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- category-sub-menu end -->
                            </div>
                            <!--sidebar-categores-box end  -->
                            <!--sidebar-categores-box start  -->
                            <div class="sidebar-categores-box">
                                <div class="sidebar-title">
                                    <h2>Filter By</h2>
                                </div>
                                <!-- btn-clear-all start -->
                                <button class="btn-clear-all mb-sm-30 mb-xs-30">Clear all</button>
                                <!-- btn-clear-all end -->
                                <!-- filter-sub-area start -->
                                <div class="filter-sub-area">
                                    <h5 class="filter-sub-titel">Brand</h5>
                                    <div class="categori-checkbox">
                                        <form action="#">
                                            <ul>
                                                <li><input type="checkbox" name="product-categori"><a href="#">Prime Video (13)</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">Computers (12)</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">Electronics (11)</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                 </div>
                                <!-- filter-sub-area end -->
                                <!-- filter-sub-area start -->
                                <div class="filter-sub-area pt-sm-10 pt-xs-10">
                                    <h5 class="filter-sub-titel">Categories</h5>
                                    <div class="categori-checkbox">
                                        <form action="#">
                                            <ul>
                                                <li><input type="checkbox" name="product-categori"><a href="#">Graphic Corner (10)</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#"> Studio Design (6)</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                 </div>
                                <!-- filter-sub-area end -->
                                <!-- filter-sub-area start -->
                                <div class="filter-sub-area pt-sm-10 pt-xs-10">
                                    <h5 class="filter-sub-titel">Size</h5>
                                    <div class="size-checkbox">
                                        <form action="#">
                                            <ul>
                                                <li><input type="checkbox" name="product-size"><a href="#">S (3)</a></li>
                                                <li><input type="checkbox" name="product-size"><a href="#">M (3)</a></li>
                                                <li><input type="checkbox" name="product-size"><a href="#">L (3)</a></li>
                                                <li><input type="checkbox" name="product-size"><a href="#">XL (3)</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <!-- filter-sub-area end -->
                                <!-- filter-sub-area start -->
                                <div class="filter-sub-area pt-sm-10 pt-xs-10">
                                    <h5 class="filter-sub-titel">Color</h5>
                                    <div class="color-categoriy">
                                        <form action="#">
                                            <ul>
                                                <li><span class="white"></span><a href="#">White (1)</a></li>
                                                <li><span class="black"></span><a href="#">Black (1)</a></li>
                                                <li><span class="Orange"></span><a href="#">Orange (3) </a></li>
                                                <li><span class="Blue"></span><a href="#">Blue  (2) </a></li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <!-- filter-sub-area end -->
                                <!-- filter-sub-area start -->
                                <div class="filter-sub-area pt-sm-10 pb-sm-15 pb-xs-15">
                                    <h5 class="filter-sub-titel">Dimension</h5>
                                    <div class="categori-checkbox">
                                        <form action="#">
                                            <ul>
                                                <li><input type="checkbox" name="product-categori"><a href="#">40x60cm (6)</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">60x90cm (6)</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">80x120cm (6)</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                 </div>
                                <!-- filter-sub-area end -->
                            </div>
                            <!--sidebar-categores-box end  -->
                            <!-- category-sub-menu start -->
                            <div class="sidebar-categores-box mb-sm-0 mb-xs-0">
                                <div class="sidebar-title">
                                    <h2>Laptop</h2>
                                </div>
                                <div class="category-tags">
                                    <ul>
                                        <li><a href="# ">Devita</a></li>
                                        <li><a href="# ">Cameras</a></li>
                                        <li><a href="# ">Sony</a></li>
                                        <li><a href="# ">Computer</a></li>
                                        <li><a href="# ">Big Sale</a></li>
                                        <li><a href="# ">Accessories</a></li>
                                    </ul>
                                </div>
                                <!-- category-sub-menu end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Wraper Area End Here -->
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
        <script src="../public/lib/Jquery/Jquery.min.js"></script>
        <script type="text/javascript" src="../public/jsAjax/shop.js?15000"></script>
        <script type="text/javascript" src="../public/jsAjax/header.js?15000"></script>
    </body>

<!-- shop-left-sidebar31:48-->
</html>
