<?php
include "connect.php";
$MaND = $_POST['MaND'];


$query = "SELECT * FROM `wishlist` WHERE MaND = '" . $MaND . "'";

$data = mysqli_query($conn, $query);
$result = array();
while ($row = mysqli_fetch_assoc($data)) {
    $result[] = ($row);
}
if (!empty($result)) {
    $arr = [
        'success' => true,
        'message' => "Thànhcoong",
        'result' => $result
    ];
} else {
    $arr = [
        'success' => false,
        'message' => "khongthanhcong",
        'result' => $result
    ];
}

print_r(json_encode($arr));
