<?php
require_once("model.php");
class khuyenmai extends Model
{
    var $table = "khuyenmai";
    var $contens = "MaKM";

    function find_km($id)
    {
        $query = "select * from $this->table where $this->contens ='$id'";
        return $this->conn->query($query)->fetch_assoc();
    }
    function delete_km($id)
    {
        $query = "DELETE FROM `khuyenmai` WHERE MaKM = '$id' ";
        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('msg', 'Delete successfully', time() + 2);
        } else {
            setcookie('msg', 'Deletion failed', time() + 2);
        }
        header('Location: ?mod=' . $this->table);
    }
}
