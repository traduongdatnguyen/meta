<?php
include "connect.php";

$Ho =  "";
$Ten  =  $_POST['Ten'];
$GioiTinh = "";
$SDT = "";
$Email = $_POST['Email'];
$DiaChi  =   "";
$Quan  =   "";
$Phuong  =   "";
$HinhAnh = "";
$TaiKhoan = $_POST['TaiKhoan'];
$MatKhau = md5($_POST['MatKhau']);
$MaQuyen =  1;
$TrangThai  =  1;



$query = "SELECT * FROM `nguoidung` WHERE `TaiKhoan` = '" . $TaiKhoan . "'";
$data = mysqli_query($conn, $query);
$numrow = mysqli_num_rows($data);

if ($numrow > 0) {
    $arr = [
        'success' => false,
        'message' => "Tài khoản đã tòn tại",
    ];
} else {
    $query = "INSERT INTO `nguoidung`( `Ho`, `Ten`, `GioiTinh`, `SDT`, `Email`, `DiaChi`, `Quan`, `Phuong`, `HinhAnh`, `TaiKhoan`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES ('" . $Ho . "','" . $Ten . "','" . $GioiTinh . "','" . $SDT . "','" . $Email . "','" . $DiaChi . "','" . $Quan . "','" . $Phuong . "','" . $HinhAnhh . "','" . $TaiKhoan . "','" . $MatKhau . "','" . $MaQuyen . "','" . $TrangThai . "')";
    $data = mysqli_query($conn, $query);

    if ($data == true) {
        $arr = [
            'success' => true,
            'message' => "Thành công",
        ];
    } else {
        $arr = [
            'success' => false,
            'message' => "Thất bại",
        ];
    }
}
print_r($arr);
