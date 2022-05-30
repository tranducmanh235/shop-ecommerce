<?php
	 require_once('../model/config/DB_class.php');

    if(!isset($_POST['request']) && !isset($_GET['request'])) die(null);
    
	switch ($_POST['request']) {
    	// lấy đánh giá của 1 sản phẩm
        case 'themhoadon':
            themHoaDon();
            break;
        case 'layhoadontheoma':
            layHoaDonTheoMa();

            break;
    	default:
    		# code...
    		break;
    }

    function layHoaDonTheoMa() {
        $mand = $_POST['mand'];
        $data = (new HoaDonBUS())->getHoaDonCuaNguoiDung($mand);

        die(json_encode($data));
    }

    function themHoaDon() {
        $mand=$_POST['mand'];
		$ngaylap=$_POST['ngaylap'];
		$nguoinhan=$_POST['nguoinhan'];
        $sdt=$_POST['sdt'];
        $diachi=$_POST['diachi'];
        $tongtien=$_POST['tongtien'];
        $status = (new HoaDonBUS())->add_new(array(
            "MaHD" => "",
			"MaND" => $mand,
            "NgayLap" => $ngaylap,
            "NguoiNhan" => $nguoinhan,
            "SDT" => $sdt,
            "DiaChi" => $diachi,
            "PhuongThucTT" => 1,
            "TongTien" => $tongtien,
            "TrangThai" => "Chờ xác nhận"
        ));
        $ma = (new HoaDonBUS())->getHoaDonTheoNgay($ngaylap);
        $products = json_decode($_POST['products']);
        for($i = 0; $i < sizeof($products); $i++) {
            $cthd = (new ChiTietHoaDonBUS())->add_new(array(
                "MaHD" => $ma['MaHD'],
                "MaSP" => $products[$i]->id,
                "SoLuong" => $products[$i]->quantity,
                "DonGia" => $products[$i]->price
            ));
        }
        die (json_encode("Success"));
    }
?>