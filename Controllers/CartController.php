<?php
require_once("Models/cart.php");
class CartController
{
    var $cart_model;
    public function __construct()
    {
        $this->cart_model = new Cart();
    }
    function list_cart()
    {
        $data_categories = $this->cart_model->categories();
        $data_catalogdetails = array();

        for ($i = 1; $i <= count($data_categories); $i++) {
            $data_catalogdetails[$i] = $this->cart_model->catalogdetails($i);
        }

        $random_khuyenmai = $this->cart_model->random_khuyenmai();
        $count = 0;
        if (isset($_SESSION['products'])) {
            foreach ($_SESSION['products'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        if (empty($_SESSION['products'])) {
        } else {
            $data = $this->cart_model->detail_product($value['MaSP']);
        }
        require_once("Views/index.php");
    }
    function add_cart()
    {
        $id = $_GET['id'];
        $data = $this->cart_model->detail_product($id);
        $count = 0;
        if ($_POST['quality'] != NULL) {
            $i = $_POST['quality'];
        } else {
            $i = 1;
        }
        $color = $_POST['typecolor'];
        if (isset($_SESSION['products'][$id])) {
            $arr = $_SESSION['products'][$id];
            $_SESSION['products'][$id] = $arr;
        } else {
            $arr['MaSP'] = $data['MaSP'];
            $arr['TenSP'] = $data['TenSP'];
            $arr['DonGia'] = $data['DonGia'];
            $arr['SoLuong'] = $i;
            $arr['Color'] = $color;
            $arr['ThanhTien'] = $data['DonGia'] * $arr['SoLuong'];
            $arr['HinhAnh1'] = $data['HinhAnh1'];
            $_SESSION['products'][$id] = $arr;
        }
        foreach ($_SESSION['products'] as $value) {
            $count += $value['ThanhTien'];
        }

        setcookie('cart', 'Add to cart successfully', time() + 4);

        header('location: ' . $data['MaSP'] . ".html");
    }
    function delete_cart()
    {
        $arr = $_SESSION['products'][$_GET['id']];
        if ($arr['SoLuong'] == 1) {
         
            unset($_SESSION['products'][$_GET['id']]);
        } else {
            $arr = $_SESSION['products'][$_GET['id']];
            $arr['SoLuong'] = $arr['SoLuong'] - 1;
            $arr['ThanhTien'] = $arr['SoLuong'] * $arr["DonGia"];
            $_SESSION['products'][$_GET['id']] = $arr;

        }
        setcookie('deletecart', 'Removed from order successfully', time() + 5);
        header('location:cart');
    }
    function update_cart()
    {
        $arr = $_SESSION['products'][$_GET['id']];
        $arr['SoLuong'] = $arr['SoLuong'] + 1;
        $arr['ThanhTien'] = $arr['SoLuong'] * $arr["DonGia"];
        $_SESSION['products'][$_GET['id']] = $arr;
        header('Location: cart');
    }
    function deleteall_cart()
    {
        unset($_SESSION['products'][$_GET['id']]);
        setcookie('deletecart', 'Removed from order successfully', time() + 5);
        header('Location: cart');
    }
    function addwishlist()
    {
        $id = $_GET['id'];
        $data = $this->cart_model->detail_product($id);
        if (isset($_SESSION['login'])) {
            $arr = array(
                'MaND' => $_SESSION['login']['MaND'],
                'MaSP' => $id,
                'TenSP' => $data['TenSP'],
                'HinhAnh' => $data['HinhAnh1'],
                'DonGia' => $data['DonGia']
            );
            $this->cart_model->add_wishlist($arr);
        } else {
            setcookie('msq', 'Can you login', time() + 5);
        }
    }
    function list_wishlist()
    {
        $data_categories = $this->cart_model->categories();
        $data_catalogdetails = array();

        for ($i = 1; $i <= count($data_categories); $i++) {
            $data_catalogdetails[$i] = $this->cart_model->catalogdetails($i);
        }
        $data = $this->cart_model->listwishlist();
        if ($data != NULL) {
            foreach ($data as $row) {
                $data_product = $this->cart_model->detail_product($row['MaSP']);
            }
        }
        require_once("Views/index.php");
    }
    function delete_wishlist()
    {
        $id = $_GET['id'];
        $this->cart_model->deletewish($id);
    }
}
