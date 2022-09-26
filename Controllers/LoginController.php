<?php
require_once("Models/login.php");
class LoginContronler
{
    var $login_model;
    function __construct()
    {
        $this->login_model = new login();
    }
    function login()
    {
        $data_categories = $this->login_model->categories();
        $data_catalogdetails = array();

        for ($i = 1; $i <= count($data_categories); $i++) {
            $data_catalogdetails[$i] = $this->login_model->catalogdetails($i);
        }
        $random_khuyenmai = $this->login_model->random_khuyenmai();
        require_once("Views/index.php");
    }
    function login_action()
    {
        $taikhoan = $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);
        if (strpos($taikhoan, "'") != false) { //Tìm vị trí xuất hiện đầu tiên của một chuỗi con trong một chuỗi
            $taikhoan = str_replace("'", "\'", $taikhoan); //Thay thế tất cả các lần xuất hiện của chuỗi tìm kiếm bằng chuỗi thay thế
        }
        $data = array(
            'taikhoan' => $taikhoan,
            'matkhau' => $matkhau,
        );
        $this->login_model->login_action($data);
    }
    function dangky()
    {
        $check1 = 0;
        $check2 = 0;
        $data_check = $this->login_model->check_account();
        foreach ($data_check as $value) {
            if ($value['Email'] == $_POST['Email'] || $value['TaiKhoan'] == $_POST['TaiKhoan']) {
                $check1 = 1;
            }
        }

        if ($_POST['MatKhau'] != $_POST['check_password']) {
            $check2 = 1;
        }
        $TrangThai = 0;
        if (isset($_POST['TrangThai'])) {
            $TrangThai = $_POST['TrangThai'];
        }
        $data = array(
            'Ho' =>    $_POST['Ho'],
            'Ten'  =>   $_POST['Ten'],
            'GioiTinh' => "",
            'SDT' => "",
            'Email' =>    $_POST['Email'],
            'DiaChi'  =>   "",
            'Quan'  =>   "",
            'Phuong'  =>   "",
            'HinhAnh' => "",
            'TaiKhoan' => $_POST['TaiKhoan'],
            'MatKhau' => md5($_POST['MatKhau']),
            'MaQuyen' =>  '1',
            'TrangThai'  =>  $TrangThai
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }

        $this->login_model->dangky_action($data, $check1, $check2);
    }
    function dangxuat()
    {
        $this->login_model->logout();
    }
    function account()
    {
        $data_categories = $this->login_model->categories();
        $data_catalogdetails = array();

        for ($i = 1; $i <= count($data_categories); $i++) {
            $data_catalogdetails[$i] = $this->login_model->catalogdetails($i);
        }
        
        $id = $_SESSION['login']['MaND'];
        $data = $this->login_model->account();

        $random_khuyenmai = $this->login_model->random_khuyenmai();
        $my_pruchase = $this->login_model->my_pruchase($id);
        if ($my_pruchase != NULL) {
            $mypruchase = $this->login_model->chitiethoadon($my_pruchase['MaHD']);
        }
      
        require_once('Views/index.php');
    }
    function huyhoadon(){
        $id = $_SESSION['login']['MaND'];
        $idHD = $_GET['idhd'];
        $this->login_model->huydonhang($idHD,$id);
    }
    function update()
    {
        session_reset();
        $target_dir = "public/assets/images/testimonials/";  // thư mục chứa file upload

        $HinhAnh = "";
        $target_file = $target_dir . basename($_FILES['HinhAnh']['name']); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES['HinhAnh']['tmp_name'], $target_file);
        var_dump(basename($_FILES['HinhAnh']['name']));
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh = basename($_FILES['HinhAnh']['name']);
        } else {
            $HinhAnh = "NO";
        }
        if (isset($_POST['Ho'])) {
            $data = array(
                'Ho' =>    $_POST['Ho'],
                'Ten'  =>   $_POST['Ten'],
                'GioiTinh' => $_POST['GioiTinh'],
                'SDT' => $_POST['SĐT'],
                'Email' =>    $_POST['Email'],
                'DiaChi'  =>   $_POST['DiaChi'],
                'Quan'  =>   $_POST['Quan'],
                'Phuong'  =>   $_POST['Phuong'],
                'HinhAnh' => $HinhAnh,
            );
            foreach ($data as $key => $value) {
                if (strpos($value, "'") != false) {
                    $value = str_replace("'", "\'", $value);
                    $data[$key] = $value;
                }
            }
            if ($HinhAnh == "") {
                unset($data['HinhAnh']);
            }
            $this->login_model->update_account($data);
        } else {
            if ($_POST['MatKhauMoi'] == $_POST['MatKhauXN']) {
                if (md5($_POST['MatKhau']) == $_SESSION['login']['MatKhau']) {
                    $data = array(
                        'MatKhau' => md5($_POST['MatKhauMoi']),
                    );
                    $this->login_model->update_account($data);
                } else {
                    setcookie('doimk', 'Confirmation password is not correct', time() + 2);
                }
            } else {
                setcookie('doimk', 'Mật khẩu mới không trùng nhau', time() + 2);
            }
        }
        session_reset();
        header('location: ?act=taikhoan&xuli=account#doitk');
    }
}
