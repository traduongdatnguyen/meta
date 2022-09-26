<?php
include "connect.php";
$TaiKhoan = $_POST['TaiKhoan'];
$MatKhau = md5($_POST['MatKhau']);


$query = "SELECT * FROM `nguoidung` WHERE TaiKhoan = '" . $TaiKhoan . "' AND matkhau = '" . $MatKhau . "' AND trangthai = 1";

$data = mysqli_query($conn, $query);
$result = array();
while($row = mysqli_fetch_assoc($data)){
    $result[] = ($row);
}
if(!empty($result)){
    $arr = [
        'success' => true,
        'message' => "thanhcong",
        'result' => $result
    ];
    $_SESSION['login'] = $result; 
}else{
    $arr = [
        'success' => false,
        'message' => "khongthanhcong",
        'result' => $result
    ];
}

print_r(json_encode($arr));
?>