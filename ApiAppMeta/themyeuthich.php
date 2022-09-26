<?php
include "connect.php";

$MaND = $_POST['MaND'];
$MaSP = $_POST['MaSP'];
$TenSP = $_POST['TenSP'];
$HinhAnhh = $_POST['HinhAnh'];
$DonGia = $_POST['DonGia'];

$checkquery = "SELECT * FROM `wishlist` WHERE `MaND` = $MaND AND `MaSP` =  $MaSP";
$data = mysqli_query($conn, $checkquery);
$numrow = mysqli_num_rows($data);

if($numrow > 0){
    $arr = [
        'success' => false,
        'message' => "Sản phầm đã được thêm vào từ trước!",
    ];
}else{
    $query = "INSERT INTO `wishlist`(`MaND`, `MaSP`, `TenSP`, `HinhAnh`, `DonGia`) VALUES('" . $MaND . "','" . $MaSP . "','" . $TenSP . "','" . $HinhAnhh . "','" . $DonGia . "')";
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
