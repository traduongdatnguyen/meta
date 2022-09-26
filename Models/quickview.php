<?php 
    require_once("model.php");
    class quickview extends model{
        function detail_sp($id)
        {
            $query = "SELECT * FROM sanpham WHERE MaSP = $id";
            $result =  $this->conn->query($query);
            return $result->fetch_assoc();
        }
    }
?>