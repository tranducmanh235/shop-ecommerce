
<?php 
    
 include "config.php";

    if(isset($_POST['update']))
    {	
		$MaND = mysqli_real_escape_string($mysqli, $_POST['MaND']);
		
        
        $Ho = mysqli_real_escape_string($mysqli, $_POST['Ho']);
        $Ten = mysqli_real_escape_string($mysqli, $_POST['Ten']);
        // $GioiTinh = mysqli_real_escape_string($mysqli, $_POST['GioiTinh']);

        $GioiTinh = $_POST['GioiTinh'];
        $SDT = mysqli_real_escape_string($mysqli, $_POST['SDT']);
        $Email = mysqli_real_escape_string($mysqli, $_POST['Email']);	
        $TaiKhoan = mysqli_real_escape_string($mysqli, $_POST['TaiKhoan']);	
        $MatKhau = mysqli_real_escape_string($mysqli, $_POST['MatKhau']);	
        $MaQuyen = mysqli_real_escape_string($mysqli, $_POST['MaQuyen']);	
        $TrangThai = mysqli_real_escape_string($mysqli, $_POST['TrangThai']);	
     
$sql = "UPDATE nguoidung SET Ho='$Ho',Ten='$Ten',GioiTinh='$GioiTinh',SDT='$SDT',Email='$Email',TaiKhoan='$TaiKhoan',MatKhau='$MatKhau',MaQuyen='$MaQuyen',TrangThai='$TrangThai' WHERE MaND=$MaND";
    
		$result = mysqli_query($mysqli, $sql);
	
		//redirectig to the display page. In our case, it is index.php
		header("Location: tables.php");
	
}
?>

<?php
//getting id from url
$MaND = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM nguoidung WHERE MaND=$MaND");
$res = mysqli_fetch_array($result);

	$Ho = $res['Ho'];
	$Ten = $res['Ten'];
	$GioiTinh = $res['GioiTinh'];
	$SDT = $res['SDT'];
	$Email = $res['Email'];
	$DiaChi = $res['DiaChi'];
	$TaiKhoan = $res['TaiKhoan'];
	$MatKhau = $res['MatKhau'];
	$MaQuyen = $res['MaQuyen'];
	$TrangThai = $res['TrangThai'];

?>
<?php


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
              <li class="breadcrumb-item active">Tables            </li>
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
					<h3 class="h4">Quản lý người dùng</h3>
				</div>
				<div class="card-body">
					<form name="form1" method="post" action="edit.php">
					<div class="row">
          <input type="hidden" placeholder="text" name="MaND" class="form-control" value="<?php echo $_GET['id'];?>">
					<div class="col-lg-6 form-group">
						<label class="form-control-label">Ho</label>
						<input type="text" placeholder="Ho" name="Ho" class="form-control" value="<?php echo $Ho;?>">
					</div>
					<div class="col-lg-6 form-group">       
						<label class="form-control-label">Ten</label>
						<input type="text" placeholder="Ten" name="Ten" class="form-control" value="<?php echo $Ten;?>">
					</div>

					<div class="col-lg-6 form-group">       
						<label class="form-control-label">Gioi Tinh</label>
            <select class="browser-default custom-select" name="GioiTinh">
            <?php  
                switch ($GioiTinh) {
                  case '':
                    ?><option selected value="">Lựa chọn</option>
                      <option value="Nam">Nam</option> 
                      <option value="Nữ">Nữ</option><?php
                    break;
              
                  case 'Nam':
                    ?><option selected value="Nam">Nam</option> <option selected value="Nữ">Nữ</option><?php
                    break;
              
                  case 'Nữ':
                    ?><option selected value="Nữ">Nữ</option> <option value="Nam">Nam </option><?php
                    break;
                }
            ?>  
            </select>
						<!-- <input placeholder="Gioi Tinh" name="GioiTinh" class="form-control" value=""> -->
					</div>
					<div class="col-lg-6 form-group">       
						<label class="form-control-label">Số điện thoại</label>
						<input type="number" placeholder="Số điện thoại" name="SDT" class="form-control" value="<?php echo $SDT;?>">
					</div>
					<div class="col-lg-6 form-group">       
						<label class="form-control-label">Email</label>
						<input type="email" placeholder="Email" name="Email" class="form-control" value="<?php echo $Email;?>">
					</div>
					<div class="col-lg-6 form-group">       
						<label class="form-control-label">Tai Khoan</label>
						<input type="text" placeholder="Tai Khoan" name="TaiKhoan" class="form-control" value="<?php echo $TaiKhoan;?>">
					</div>
					<div class="col-lg-6 form-group">       
						<label class="form-control-label">Mật Khẩu</label>
						<input type="text" placeholder="Mật khẩu" name="MatKhau" class="form-control" value="<?php echo $MatKhau;?>">
					</div>
					<div class="col-lg-6 form-group">       
						<label class="form-control-label">trang thai</label>
            <select class="browser-default custom-select" name="TrangThai">
              <option selected value="<?php echo $TrangThai?>"><?php echo $TT= ($TrangThai=="1")?'hoạt động':'ngưng hoạt động';?></option>
              <option value="1">Hoạt động</option>
              <option value="2">Ngưng hoạt động</option>

            </select>
					</div>
					<div class="col-lg-6 form-group">       
						<label class="form-control-label"> ma quyen</label>
            <select class="browser-default custom-select" name="MaQuyen">

            <option selected value=<?php echo $MaQuyen?>><?php echo $MQ= ($MaQuyen=="1")?'Admin':'User';?></option>
              <option value="2">User</option>
              <option value="1">Admin</option>
            </select>
					</div>
					<div class="col-lg-6 form-group"> 
						<input type="submit"name="update" value="update" class="btn btn-primary">
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
