<?php
require_once("model.php");
class Blog extends model{
    function list_blogs(){
        $query = "SELECT * FROM blogs ORDER BY NgayDang DESC";
        require("result.php");
        return $data;
    }
    function detail_blog($id){
        $query = "SELECT * FROM blogs WHERE MaBlogs = $id";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
}