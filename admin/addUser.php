
<?php 
    
    include "config.php";


    if(isset($_POST['Submit']))
    {	
        
        $Ho = mysqli_real_escape_string($mysqli, $_POST['Ho']);
        $Ten = mysqli_real_escape_string($mysqli, $_POST['Ten']);
        $GioiTinh = $_POST['GioiTinh'];
        $SDT = mysqli_real_escape_string($mysqli, $_POST['SDT']);
        $Email = mysqli_real_escape_string($mysqli, $_POST['Email']);	
        $DiaChi = mysqli_real_escape_string($mysqli, $_POST['DiaChi']);
        $TaiKhoan = mysqli_real_escape_string($mysqli, $_POST['TaiKhoan']);	
        $MatKhau = mysqli_real_escape_string($mysqli, $_POST['MatKhau']);	
        $MaQuyen = mysqli_real_escape_string($mysqli, $_POST['MaQuyen']);	
        $TrangThai = mysqli_real_escape_string($mysqli, $_POST['TrangThai']);	
     
	// checking empty fields
	if(empty($Ho) || empty($Ten) || empty($TrangThai)) {	
			
		if(empty($Ho)) {
			echo "<font color='red'>Ho field is empty.</font><br/>";
		}
		
		if(empty($Ten)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($TrangThai)) {
			echo "<font color='red'>Trang Thai field is empty.</font><br/>";
		}		
	} else {	
		//insert the table
		$result = mysqli_query($mysqli, "INSERT INTO nguoidung (Ho,Ten,GioiTinh,SDT,Email,DiaChi,TaiKhoan,MatKhau,MaQuyen,TrangThai) VALUES('$Ho','$Ten','$GioiTinh','$SDT','$Email','$DiaChi','$TaiKhoan','$MatKhau','$MaQuyen','$TrangThai')");
		echo'<h1>Insert</h1>';
		//redirectig to the display page. In our case, it is index.php
		header("Location: tables.php");
	}
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AMIN SHOPPING</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/table.css">
     <!-- Icon-->
    <link rel="shortcut icon" type="image/x-icon" href="../public/images/favicon.png">
    <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
 
<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar"  style="background-color:#3366FF">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.php" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><img src="../public/images/menu/logo/1.jpg"></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>ADMiN</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Logout    -->
                <li class="nav-item"><a href="login.php" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><i class="icon ion-md-person" style="font-size: 250%;"></i></div>
            <div class="title">
              <h1 class="h4">ADMIN</h1>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li><a href="index.php"> <i class="icon-home"></i>Home</a></li>
            <li class="active"><a href="tables.php"> <i class="icon-grid"></i>Quản lý người dùng </a></li>
            <li><a href="manageOrder.php"> <i class="icon-padnote"></i>Quản lý đơn hàng</a></li>
            <li><a href="manageProduct.php"> <i class="fa fa-calendar-o"></i>Quản lý sản phẩm</a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Quản lý người dùng</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Quản lý người dùng            </li>
            </ul>
          </div>
          <!-- <section class="tables">    -->
            <div class="container-fluid">
              
            </div>
          </section>
            
        <div class="row">
			<div class="col-lg-12">
				<div class="card">
				<div class="card-close">
					<div class="dropdown">
					<button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
					<div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
					</div>
				</div>
				<div class="card-header d-flex align-items-center">
					<h3 class="h4">Thêm Người dùng</h3>
				</div>
				<div class="card-body">
					<p>Thêm người dùng mới vào hệ thống</p>
					<form name="form1" method="post" action="addUser.php">
					<div class="row">
					<div class="col-lg-6 form-group">
						<label class="form-control-label">Ho</label>
						<input type="text" placeholder="Ho" name="Ho" class="form-control">
					</div>
					<div class="col-lg-6 form-group">       
						<label class="form-control-label">Ten</label>
						<input type="text" placeholder="Ten" name="Ten" class="form-control">
					</div>

					<div class="col-lg-6 form-group">       
						<label class="form-control-label">Gioi Tinh</label>
            <select class="browser-default custom-select" name="GioiTinh">
              <option selected value="Nam">Nam</option>
              <option value="Nữ">Nữ</option>
            </select>
						<!-- <input type="text" placeholder="Gioi Tinh" name="GioiTinh" class="form-control"> -->
					</div>
					<div class="col-lg-6 form-group">       
						<label class="form-control-label">Số điện thoại</label>
						<input type="text" placeholder="Số điện thoại" name="SDT" class="form-control">
					</div>
					<div class="col-lg-6 form-group">       
						<label class="form-control-label">Email</label>
						<input type="text" placeholder="Email" name="Email" class="form-control">
					</div>
					<div class="col-lg-6 form-group">       
						<label class="form-control-label">Địa chỉ</label>
						<input type="text" placeholder="Địa chỉ" name="DiaChi" class="form-control">
					</div>
					<div class="col-lg-6 form-group">       
						<label class="form-control-label">Tai Khoan</label>
						<input type="text" placeholder="Tai Khoan" name="TaiKhoan" class="form-control">
					</div>
					<div class="col-lg-6 form-group">       
						<label class="form-control-label">Mật Khẩu</label>
						<input type="text" placeholder="Mật khẩu" name="MatKhau" class="form-control">
					</div>
					<div class="col-lg-6 form-group">       
						<label class="form-control-label">trang thai</label>
            <select class="browser-default custom-select" name="TrangThai">
              <option selected value="1">Hoạt động</option>
              <option value="0">Ngưng hoạt động</option>
            </select>
					</div>
					<div class="col-lg-6 form-group">       
						<label class="form-control-label"> ma quyen</label>
            <select class="browser-default custom-select" name="MaQuyen">
              <option selected value="1">Admin</option>
              <option value="2">User</option>
            </select>
          </div>
					<div class="col-lg-6 form-group"> 
						<input type="submit"name="Submit" value="Add" class="btn btn-primary">
					</div>
					</div>
					</form>
				</div>
				</div>
			</div>
		</div>
                 
          <!-- Page Footer-->
          <footer class="main-footer" style="background-color:#3366FF">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>&nbsp</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>&nbsp</p>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>
