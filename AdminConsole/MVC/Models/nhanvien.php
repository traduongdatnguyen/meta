<?php
require_once("model.php");
class qlnhanvien extends Model
{
    var $table = "nguoidung";
    var $contens = "MaND";
    function listnhanvien()
    {
        $query = "select * from $this->table where MaQuyen = 3 or MaQuyen = 4 ORDER BY $this->contens DESC";

        require("result.php");

        return $data;
    }
}
