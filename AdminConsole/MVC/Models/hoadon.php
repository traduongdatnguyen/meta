<?php
require_once("model.php");
class Hoadon extends Model
{
    var $table = "hoadon";
    var $contens = "MaHD";
    function trangthai($id)
    {
        $query = "select * from HoaDon where TrangThai = $id  ORDER BY MaHD DESC";

        require("result.php");

        return $data;
    }
    function All_hoadon(){
        $query = "select * from HoaDon where TrangThai = 1 OR TrangThai = 0 ORDER BY MaHD DESC";

        require("result.php");

        return $data;
    }
    function donhangchuavanchuyen($id)
    {
        $query = "select * from HoaDon where TrangThai = $id  ORDER BY MaHD DESC";

        require("result.php");

        return $data;
    }
    function chitiethoadon($id)
    {
        $query = "select ct.*, s.TenSP as Ten from chitiethoadon as ct, sanpham as s where ct.MaSP = s.MaSP and ct.MaHD = $id";

        require("result.php");

        return $data;
    }
    function update_hoadon($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");


        $query = "UPDATE $this->table SET  $v   WHERE $this->contens = " . $data[$this->contens];
        $result = $this->conn->query($query);



        //hiển thị sản phẩm có mua trong hóa đơn
        $select_hoadon = "SELECT * FROM `chitiethoadon` WHERE $this->contens = " . $data[$this->contens];
        $result_select_hoadon = $this->conn->query($select_hoadon)->fetch_assoc();

        //Update số lượng khi mua hàng
        $query_sluong = "SELECT * FROM `sanpham` WHERE `MaSP` = " . $result_select_hoadon['MaSP'];
        $data_Soluong = $this->conn->query($query_sluong)->fetch_assoc();
        if ($data_Soluong != NULL) {
            $soluonthaydoi = $data_Soluong['SoLuong'] - $result_select_hoadon['SoLuong'];
            $idSP = $data_Soluong['MaSP'];
            $queryUpdateSL = "UPDATE `sanpham` SET `SoLuong` = $soluonthaydoi WHERE MaSP = $idSP";
            $status_updateSL = $this->conn->query($queryUpdateSL);
        }
        if ($result == true) {
            setcookie('msg', 'Browse successfully', time() + 2);
            header('Location: ?mod=hoadon&act=chitiet&id=' . $data['MaHD']);
        } else {
            setcookie('msg', 'Update failed', time() + 2);
            header('Location: ?mod=' . $this->table . '&act=edit&id=' . $data[$this->contens]);
        }
    }
    function xacnhanvanchuyen($data)
    {
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO transportstaff($f) VALUES ($v);";
        $status = $this->conn->query($query);
        $query_xhgh = "UPDATE `hoadon` SET `TinhTrangGH` = 1 WHERE `MaHD` = " . $data['MaHD'];
        $result = $this->conn->query($query_xhgh);
        if ($status == true) {
            setcookie('msg', 'More success', time() + 2);
            header('Location: ?mod=hoadon&act=chitiet&id=' . $data['MaHD']);
        } else {
            setcookie('msg', 'Add failed', time() + 2);
            header('Location: ?mod=hoadon&act=chitiet&id=' . $data['MaHD']);
        }
    }
    function hoanthanhvanchuyen($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");
        $query = "UPDATE `transportstaff` SET $v WHERE MaHD = " . $data['MaHD'];
        $status = $this->conn->query($query);
        $query_xhgh = "UPDATE `hoadon` SET `TinhTrangGH` = 2 WHERE `MaHD` = " . $data['MaHD'];
        $result = $this->conn->query($query_xhgh);
        if ($status == true) {
            setcookie('msg', 'More success', time() + 2);
            header('Location: ?mod=hoadon&act=chitiet&id=' . $data['MaHD']);
        } else {
            setcookie('msg', 'Add failed', time() + 2);
            header('Location: ?mod=hoadon&act=chitiet&id=' . $data['MaHD']);
        }
    }

    function select_vanchuyen($MaHD)
    {
        $query = "SELECT * FROM `transportstaff` WHERE `MaHD` = $MaHD";
        return $this->conn->query($query)->fetch_assoc();
    }
    function delete_transportstall($MaHD)
    { 
        $query = "UPDATE `hoadon` SET `TrangThai` = 3 WHERE `MaHD` = $MaHD";
        $status = $this->conn->query($query);
        if($status == true){
            setcookie('msg', 'More success', time() + 2);
            header('Location: hoadon');
        }else{
            setcookie('msg', 'Failed', time() + 2);
            header('Location: hoadon');
        }
    }
}
