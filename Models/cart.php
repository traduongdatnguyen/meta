<?php
require_once("model.php");
class Cart extends model
{
    function detail_product($id)
    {
        $query = "SELECT * FROM sanpham WHERE MaSP = $id";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

    //thêm vào danh sách yêu thích
    function add_wishlist($arr)
    {
        $f = "";
        $v = "";
        foreach ($arr as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";

        }
        $f = trim($f, ",");
        $v = trim($v, ",");


        $query = "INSERT INTO wishlist($f) VALUES ($v);";
        $status = $this->conn->query($query);
        if ($status == true) {
            header('location:wishlist');
        }
    }
    function listwishlist()
    {
        if (isset($_SESSION['login'])) {
            $id = $_SESSION['login']['MaND'];
            $query = "SELECT * FROM `wishlist` WHERE `MaND` = $id";
            require("result.php");
            return $data;
        } else {
            echo ("No products wishlist !!");
        }
    }
    function deletewish($id)
    {
        $query = "DELETE FROM `wishlist` WHERE `MaSP` = $id";
        $result = $this->conn->query($query);

        if ($result == true) {
            header('location:wishlist');
        }
    }
}
