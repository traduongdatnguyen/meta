<?php
    include("connect.php");
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ThoiGian =  date('Y-m-d H:i:s');
    $chitietdonhang = $_POST['chitietdonhang'];
    $data = array(
        'MaND' => $_POST['MaND'],
        'NgayLap' => $ThoiGian,
        'NguoiNhan' => $_POST['NguoiNhan'],
        'SDT' => $_POST['SDT'],
        'DiaChi' => $_POST['DiaChi'],
        'Quan' => "",
        'Phuong' => "",
        'PhuongThucTT' => "Sau khi nhận hàng",
        'TongTien' => $_POST['TongTien'],
        'TrangThai'  =>  '0',
        'TinhTrangGH' => '0',
        'Note' => $_POST['Note'],
        'Email' => "",
    );
    $f = "";
    $v = "";
    foreach ($data as $key => $value) {
      $f .= $key . ",";
      $v .= "'" . $value . "',";
    }
    $f = trim($f, ",");
    $v = trim($v, ",");
    $query = "INSERT INTO HoaDon($f) VALUES ($v);";
    $status = mysqli_query($conn, $query);

    $query_mahd = "select MaHD from hoadon ORDER BY NgayLap DESC LIMIT 1";
    $data_mahd = mysqli_query($conn, $query_mahd)->fetch_assoc();

    $chitiet = json_decode($chitietdonhang,true);
    
    foreach ($chitiet as $key => $value) {
      $MaSP = $value['MaSP'];
      $SoLuong = $value['SoLuong'];
      $color = "";
      $DonGia = $value['DonGia'];
      $MaHD = $data_mahd['MaHD'];
      $query_ct = "INSERT INTO chitiethoadon(MaHD,MaSP,SoLuong,Color,DonGia) VALUES ($MaHD,$MaSP,$SoLuong,'$color',$DonGia)";
      $status_ct = mysqli_query($conn, $query_ct);

    }


    if ($status == true && $status_ct == true) {
        $arr = [
            'success' => true,
            'message' => "Đơn hàng của bạn đặt thành công. Cảm ơn đơn hàng của bạn đang xét duyệt!",
        ];
    } else {
        $arr = [
            'success' => false,
            'message' => "Đặt đơn hàng thất bại!",
        ];
    }

?>