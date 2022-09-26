<?php
require_once("MVC/models/hoadon.php");
class HoaDonController
{
    var $hoadon_model;
    public function __construct()
    {
        $this->hoadon_model = new Hoadon();
    }
    function list()
    {
        $data = array();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($id > 1) {
                $id = 0;
            }
            $data = $this->hoadon_model->trangthai($id);
        } else {
            $data = $this->hoadon_model->All_hoadon();
        }
        require_once("MVC/Views/Admin/index.php");
    }

    //nhân viên giao hàng
    function list_daduyet()
    {
        $data = array();
        $id = 1;
        $data = $this->hoadon_model->donhangchuavanchuyen($id);
        require_once("MVC/Views/Admin/index.php");
    }
    
    function xetduyet()
    {
        $data = array(
            'MaHD' => $_GET['id'],
            'TrangThai' => 1,
        );
        $this->hoadon_model->update_hoadon($data);
    }
    function delete()
    {
        if (isset($_GET['id'])) {
            $this->hoadon_model->delete_transportstall($_GET['id']);
        }
    }
    function chitiet()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->hoadon_model->chitiethoadon($id);

        $data_vanchuyendonhang = $this->hoadon_model->select_vanchuyen($id);
        require_once("MVC/Views/Admin/index.php");
    }
    function chitiet_nhanviengh()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->hoadon_model->select_vanchuyen($id);
        require_once("MVC/Views/Admin/index.php");
    }
    function xacnhanvanchuyen()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');

        $MaND = $_SESSION['login']['MaND'];
        $id = $_GET['id'];
        $NameTransports = $_SESSION['login']['Ho'] . $_SESSION['login']['Ten'];
        $data = array(
            'MaND' => $MaND,
            'MaHD' => $id,
            'NameTransports' => $NameTransports,
            'Status' => 1,
            'NgayBatDau' => $ThoiGian,
            'NgayKetThuc' => ""
        );
        $this->hoadon_model->xacnhanvanchuyen($data);
    }
    function hoanthanhvanchuyen(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'MaHD' => $_GET['id'],
            'Status' => 2,
            'NgayKetThuc' => $ThoiGian,
        );
        $this->hoadon_model->hoanthanhvanchuyen($data);
    }
}
