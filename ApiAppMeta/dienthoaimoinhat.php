<?php
include "connect.php";
$query = "SELECT * FROM `sanpham` WHERE `MaDM` = 1 ORDER BY MaSP DESC LIMIT 8";
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
}else{
    $arr = [
        'success' => false,
        'message' => "khongthanhcong",
        'result' => $result
    ];
}

print_r(json_encode($arr));
?>