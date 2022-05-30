<?php include "include/header.php" ?>


	<section>
		<div class="infoUser"> </div>
		<div class="listDonHang"> </div>

		<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				    <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel" >Chi tiết đơn hàng</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
				          <span aria-hidden="true">&times;</span>
				        </button>
				    </div>
				<div class="modal-body" id="chitietdonhang"></div>
				<div class="modal-footer">
		        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
		        	<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
		      	</div>
		    	</div>
		  	</div>
		</div>
		
	</section> <!-- End Section -->


	<div class="containTaikhoan">
    <span class="close" onclick="showTaiKhoan(false);">&times;</span> 
        
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <div id="showbill"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

	<div class="footer" style="margin-top: 30px">
    <?php include "./include/footer.php" ?>
	</div>
	<script type="text/javascript" src="../public/jsAjax/user.js?15000"></script>
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
    <script type="text/javascript" src="../public/jsAjax/header.js?15000"></script>
</body>

</html>