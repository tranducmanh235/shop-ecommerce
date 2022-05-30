<?php

// Thêm topnav vào trang
function showSaleProducts()
{
    echo '
    <div class="product-area pt-60 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                    <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Giảm Giá Nhanh</span></a></li>
                                    <li><a data-toggle="tab" href="#li-bestseller-product"><span>Bán Chạy Nhất</span></a></li>
                                    <li><a data-toggle="tab" href="#li-featured-product"><span>Phân Loại Sản Phẩm</span></a></li>
                                </ul>               
                            </div>
                          
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                            <div class="row">
                                
                                <div class="time-sale" style="display: inline-block;">
                                    <img src="public/images/shipping-icon/flash-sale.jpg" alt="Smiley face" height="130" width="200">    
                                </div>
                                <div class="li-countdown product-sale-countdown countdown"><div class="count">00 <span>Days:</span></div> <div class="count">00 <span>Hours:</span></div> <div class="count">00 <span>Mins:</span></div><div class="count"> 00 <span>Secs</span></div></div>
                                
                                <div class="companyMenu group flexContain container"></div>

                                <div class="timNangCao container">
                                    <div class="flexContain">
                                        <div class="pricesRangeFilter dropdown">
                                            <button class="dropbtn">Giá tiền</button>
                                            <div class="dropdown-content"></div>
                                        </div>
                            
                                        <div class="promosFilter dropdown">
                                            <button class="dropbtn">Khuyến mãi</button>
                                            <div class="dropdown-content"></div>
                                        </div>
                            
                                        <div class="starFilter dropdown">
                                            <button class="dropbtn">Số lượng sao</button>
                                            <div class="dropdown-content"></div>
                                        </div>
                            
                                        <div class="sortFilter dropdown">
                                            <button class="dropbtn">Sắp xếp</button>
                                            <div class="dropdown-content"></div>
                                        </div>            
                                    </div>
                                    
                                    <div>
                                        <input type="text" class="js-range-slider" id="demoSlider">
                                    </div>
                            
                                </div> <!-- End khung chọn bộ lọc -->
                            
                                <div class="choosedFilter flexContain"></div> <!-- Những bộ lọc đã chọn -->
                              
                            
                                <!-- Mặc định mới vào trang sẽ ẩn đi, nế có filter thì mới hiện lên -->
                                <div class="contain-products" style="display:none">
                                <div class="filterName">
                                    <div id="divSoLuongSanPham"></div>
                                    <input type="text" placeholder="Lọc trong trang theo tên..." onkeyup="filterProductsName(this)">
                                    <div class="loader" style="display: none"></div>
                                </div> <!-- End FilterName -->
                            
                                <ul id="products" class="homeproduct group flexContain">
                                    <div id="khongCoSanPham">
                                        <i class="fa fa-times-circle"></i>
                                        Không có sản phẩm nào
                                    </div> <!-- End Khong co san pham -->
                                </ul><!-- End products -->
                            
                                <div class="pagination"></div>
                                </div>
                            
                                <!-- Div hiển thị khung sp hot, khuyến mãi, mới ra mắt ... -->
                                <div class="contain-khungSanPham container"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
';}