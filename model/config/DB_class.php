<?php
require_once("DB_business.php");

// hiển thị dạng <table> dữ liệu từ 1 bảng trong database 
function show_DataBUS_as_Table($bus)
{
    echo "<table cellspacing='15'>";
    foreach ($bus->select_all() as $rowname => $row) {
        echo "<tr>";
        foreach ($row as $colname => $col) {
            echo "<td>" . $col . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Lớp sản phẩm
class SanPhamBUS extends DB_business
{
    function __construct()
    {
        $this->setTable("sanpham", "MaSP");
    }

    function capNhapTrangThai($trangthai, $id) {
        $sanpham = $this->select_by_id("*", $id);
        $sanpham["TrangThai"] = $trangthai;

        return $this->update_by_id($sanpham, $id);
    }

    function themDanhGia($id) {
        // cập nhật số lượt đánh giá
        $sanpham = $this->select_by_id("*", $id);
        // $sanpham["SoDanhGia"] = $sanpham["SoDanhGia"] + 1;

        // cập nhật số sao trung bình
        $dsbl = (new DB_driver())->get_list("SELECT * FROM danhgia WHERE MaSP=$id");
        $tongSoSao = 0;
        for($i = 0; $i < sizeof($dsbl); $i++) {
            $tongSoSao += $dsbl[$i]["SoSao"];
        }
        $sanpham["SoDanhGia"] = sizeof($dsbl);
        $sanpham["SoSao"] = $tongSoSao / sizeof($dsbl);

        return $this->update_by_id($sanpham, $id);
    }
}

// Lớp loại sản phẩm
class LoaiSanPhamBUS extends DB_business
{
    function __construct()
    {
        $this->setTable("loaisanpham", "MaLSP");
    }
}

// Lớp chi tiết sản phẩm
class ChiTietSanPhamBUS extends DB_business
{
    function __construct()
    {
        $this->setTable("chitietsanpham", "MaSP");
    }
}

// Lớp người dùng
class NguoiDungBUS extends DB_business
{
    function __construct()
    {
        $this->setTable("nguoidung", "MaND");
    }

    function add_new($data)
    {
        // check
        // username trung, email trung
        
        // them
        parent::add_new($data);
    }
}

// Lớp hóa đơn
class HoaDonBUS extends DB_business
{
    function __construct()
    {
        $this->setTable("hoadon", "MaHD");
    }

    function getHoaDonCuaNguoiDung($mand) {
        $sql = "SELECT chitiethoadon.MaHD, sanpham.TenSP,chitiethoadon.SoLuong, chitiethoadon.DonGia, hoadon.NgayLap, hoadon.TrangThai FROM ((chitiethoadon INNER JOIN sanpham ON sanpham.MaSP = chitiethoadon.MaSP) INNER JOIN hoadon ON hoadon.MaHD = chitiethoadon.MaHD) WHERE hoadon.MaND = $mand";
        $dsdh = (new HoaDonBUS())->get_list($sql);
        return $dsdh;
    }

    function getHoaDonTheoNgay($day) {
        $sql = "SELECT MaHD FROM hoadon WHERE NgayLap='$day'";
        $hd = (new HoaDonBUS())->get_row($sql);
        return $hd;
    }

    function add_new($data) {
        parent::add_new($data);
    }
}

// Lớp tài khoản
class TaiKhoanBUS extends DB_business
{
    function __construct()
    {
        $this->setTable("nguoidung", "TaiKhoan");
    }

    function getTaiKhoanBangMa($mand) {
        $sql = "SELECT * FROM nguoidung WHERE MaND=$mand";
        $dsdg = (new TaiKhoanBUS())->get_row($sql);
        return $dsdg;
    }
}

// Lớp phân quyền
class PhanQuyenBUS extends DB_business
{
    function __construct()
    {
        $this->setTable("phanquyen", "MaQuyen");
    }
}

// Lớp khuyến mãi
class KhuyenMaiBUS extends DB_business
{
    function __construct()
    {
        $this->setTable("khuyenmai", "MaKM");
    }
}

// Lớp chi tiết hóa đơn , có 2 khóa chính
class ChiTietHoaDonBUS extends DB_business
{
    protected $key2;

    function __construct()
    {
        $this->setTable("chitiethoadon", "MaHD");
        $this->_key2 = "MaSP";
    }

    // Hàm xóa theo id hóa đơn và id sản phẩm
    function delete_by_2id($id, $id2)
    {
        return $this->remove($this->_table_name, $this->_key . "='" . $id . "' AND " . $this->_key2 . "='" . $id2 . "'");
    }

    // Hàm cập nhật theo id hóa đơn + id sản phẩm
    function update_by_2id($data, $id, $id2)
    {
        return $this->update($this->_table_name, $data, $this->_key . "='" . $id . "' AND " . $this->_key2 . "='" . $id2 . "'");
    }

    // hàm select theo id hóa đơn + id sản phẩm
    function select_by_2id($select, $id, $id2)
    {
        $sql = "select $select from " . $this->_table_name . " where " . $this->_key . " = '" . $id . "' AND " . $this->_key2 . "='" . $id2 . "'";
        return $this->get_row($sql);
    }

    // hàm get all chi tiết có mã hóa đơn truyền vào
    function select_all_in_hoadon($id)
    {
        $sql = "select * from " . $this->_table_name . " where " . $this->_key . " ='" . $id . "'";
        return $this->get_list($sql);
    }

    // hàm insert hóa đơn
    function add_new($data) {
        parent::add_new($data);
    }
}

// Lớp đánh giá
class DanhGiaBUS extends DB_business
{
    function __construct()
    {
        $this->setTable("danhgia", "MaSP");
    }

    function getDanhGiaCuaSP($masp) {
        $sql = "SELECT * FROM danhgia WHERE MaSP=$masp";
        $dsdg = (new DanhGiaBUS())->get_list($sql);
        return $dsdg;
    }

    function add_new($data)
    {
        parent::add_new($data);
    }
}
