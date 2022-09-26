<?php
include "connect.php";
$search = $_POST['search'];
$query = "SELECT `sanpham`.*,`loaisanpham`.* FROM `sanpham` JOIN `loaisanpham` on `sanpham`.`MaLSP`=`loaisanpham`.`MaLSP` WHERE `TenLSP` LIKE '%" .$search. "%' OR `TenSP` LIKE '%" .$search. "%'";
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
