<?php
include "config.php";
// BƯỚC 2: TÌM TỔNG SỐ RECORDS
$result = mysqli_query($mysqli, 'select count(MaSP) as total from sanpham');
include "config-page.php";
$result = mysqli_query($mysqli, "SELECT * FROM sanpham ORDER BY MaSP DESC LIMIT $start, $limit");

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
            <li><a href="index.php"> <i class="icon-home"></i>Home </a></li>
            <li><a href="tables.php"> <i class="icon-grid"></i>Quản lý người dùng </a></li>
            <li><a href="manageOrder.php"> <i class="icon-padnote"></i>Quản lý đơn hàng</a></li>
            <li class="active"><a href="manageProduct.php"> <i class="fa fa-calendar-o"></i>Quản lý sản phẩm</a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Quản lý sản phẩm</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Quản lý sản phẩm</li>
            </ul>
          </div>
          <!-- <section class="tables">    -->
            <div class="container-fluid">
              <div class="row">
             
              <button type="button" name="add" id="add" class="btn btn-success btn-xs" style="margin-left:15px;"><a href=addProduct.php style="color:white"><i class="fa fa-plus"></i> Add</a></button>

                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Quản lý sản phẩm</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive" id="user_data">
                
                      <table class="table">
                          <thead>
                            <th>Mã sản phẩm</th>
                            <th>Mã lớp sản phẩm</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Hình ảnh</th>
                            <th>Mã khuyến mãi</th>
                            <th>Chi tiết</th>
                            <th>Số sao</th>
                            <th>Số đánh giá</th>
                            <th>Trạng Thái</th>
                            <th>Chỉnh sửa</th>
                            <th>Xóa</th>
                          </thead>
                          <tbody>
                          <?php 
                            
                            // if(isset($_POST['delete'])) { 
                            //   $MaND = $_POST["mand"];
                            //   $delete = mysqli_query($mysqli, "UPDATE nguoidung SET TrangThai='0' WHERE MaND=$MaND");
                            //   echo("<meta http-equiv='refresh' content='0'>");
                            // } 
                            while($res = mysqli_fetch_array($result)) { 		
                              echo'
                              <tr>
                              <form method="post">
                              <td width="3%"">'.$res["MaSP"].'</td>
                              <input type="hidden" name="mand" value="'.$res["MaSP"].'"></input>
                              <td width="5%">'.$res["MaLSP"].'</td>
                              <td width="10%"> '.$res["TenSP"].'</td>
                              <td width="5%">'.$res["DonGia"].'</td>
                              <td width="10%">'.$res["SoLuong"].'</td>
                              <td width="15%"" ><img style="height: 100px; width: 100px;"src='.$res["HinhAnh"].'></td>
                              <td width="15%"">'.$res["MaKM"].'</td>
                              <td width="12%">'.$res["Details"].'</td>
                              <td width="5%"">'.$res["SoSao"].'</td>
                              <td width="5%">'.$res["SoDanhGia"].'</td>
                              <td width="5%">'.$res["TrangThai"].'</td>
                              <td width="5%">
                                <button type="button" class="btn btn-primary" id="'.$res["MaSP"].'"><a href=editProduct.php?id='.$res["MaSP"].'><i class="fa fa-edit" style="color:white"></i></a></button>
                              </td>
                              <td width="5%">
                                <button type="submit" name="delete" class="btn btn-danger" id="'.$res["MaSP"].'"><i class="fa fa-trash"></i></button>
                              </td>
                                </form>
                              </tr>
                              ';

                            }
                            echo'</table> ';
                            echo '<ul class="pagination-box pt-xs-20 pb-xs-15">

                            <li> <a href="manageProduct.php?page='.($current_page-1).'" class="Previous"><i class="fa fa-chevron-left"></i>Prev</a>';
               
                          // Lặp khoảng giữa
                          for ($i = 1; $i <= $total_page; $i++){
                              // Nếu là trang hiện tại thì hiển thị thẻ span
                              // ngược lại hiển thị thẻ a
                              if ($i == $current_page){
                                  echo '<li class="active"><a href="manageProduct.php?page='.$current_page.'">'.$i.'</a></li>';
                              }
                              else{
                                  echo '<li><a href="manageProduct.php?page='.$i.'">'.$i.'</a> </li>';
                              }
                          }
               
                          // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                          if ($current_page < $total_page && $total_page > 1){
                              echo '<li>
                              <a href="manageProduct.php?page='.($current_page+1).'" class="Next">Next<i class="fa fa-chevron-right"></i></a> 
                              </li> 
                              </ul>';
                          }

                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
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

<scrip>
  
</scrip>