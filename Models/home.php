<?php
    require_once("model.php");
    class home extends model{
        function sanphambanchay()
        {
            //SELECT DISTINCT `sanpham`.`TenSP`,`HinhAnh1`,`DonGia` FROM `chitiethoadon` JOIN `sanpham` on `chitiethoadon`.`MaSP`=`sanpham`.`MaSP`
            // $query = "SELECT * FROM sanpham WHERE MaSP = (SELECT MaSP sp FROM chitiethoadon GROUP BY MaSP ORDER BY COUNT(MaSP) DESC LIMIT 1)";
            // $query ="SELECT * FROM sanpham WHERE TrangThai = 1 ORDER BY MaSP DESC LIMIT 9";
            
            //SELECT DISTINCT `chitiethoadon`.`MaSP`, `sanpham`.* FROM `chitiethoadon` JOIN `sanpham` WHERE chitiethoadon.MaSP = sanpham.MaSP
            //SELECT DISTINCT `sanpham`.`TenSP`,`HinhAnh1`,`HinhAnh3`,`MaLSP` FROM `chitiethoadon` JOIN `sanpham` on `chitiethoadon`.`MaSP`=`sanpham`.`MaSP`
            $query= "SELECT DISTINCT `sanpham`.* FROM `chitiethoadon` JOIN `sanpham` JOIN `hoadon` WHERE chitiethoadon.MaSP = sanpham.MaSP AND hoadon.TrangThai = 1";
            require("result.php");
            return $data;
        }
        function sale(){
            $query = "SELECT * FROM `sanpham` WHERE TrangThai = 3 ORDER BY ThoiGian DESC";
            require("result.php");
            return $data;
        }
        function comingsoon(){
            $query = "SELECT * FROM `sanpham` WHERE TrangThai = 0 ORDER BY ThoiGian DESC";
            require("result.php");
            return $data;
        }
        function product_hot(){
            $query = "SELECT * FROM `sanpham` WHERE TrangThai = 4 ORDER BY ThoiGian DESC";
            require("result.php");
            return $data;
        }
        function best_phone_products(){
            $query = "SELECT * FROM `sanpham` WHERE MaDM = 1 ORDER BY ThoiGian DESC LIMIT 0,12";
            require("result.php");
            return $data;
        }
        function liveviews(){
             //SELECT DISTINCT * FROM `liveview` JOIN `sanpham` WHERE liveview.MaSP = sanpham.MaSP ORDER BY SoLuongView DESC
            $query = "SELECT DISTINCT * FROM `liveview` JOIN `sanpham` WHERE liveview.MaSP = sanpham.MaSP ORDER BY SoLuongView DESC";
            require("result.php");
            return $data;
        }
        function liveview($MaDM){
            //SELECT DISTINCT * FROM `liveview` JOIN `sanpham` WHERE liveview.MaSP = sanpham.MaSP ORDER BY SoLuongView DESC
           $query = "SELECT DISTINCT * FROM `liveview` JOIN `sanpham` WHERE liveview.MaSP = sanpham.MaSP AND MaDM = $MaDM ORDER BY SoLuongView DESC";
           require("result.php");
           return $data;
       }
       
    }
?>