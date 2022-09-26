<?php
require_once("Models/detail.php");
class DetailController{
    var $detail_model;
    public function __construct()
    {
        $this->detail_model = new Detail();
    }
    function show_detail(){
        $data_categories = $this->detail_model->categories();
        $data_catalogdetails = array();

        for ($i = 1; $i <= count($data_categories); $i++) {
            $data_catalogdetails[$i] = $this->detail_model->catalogdetails($i);
        }
        $id = $_GET['id'];
        $data = $this->detail_model->detail_product($id);
        $dataview = $this->detail_model->viewlive($id);
        $data_color = $this->detail_model->selectColor($id);
        $random_khuyenmai= $this->detail_model->random_khuyenmai();
        if($data != NULL){
            $data_products = $this->detail_model->related_products(0,10, $data['MaDM']);
            $category_where = $this->detail_model->categories_where($data['MaDM']);
        }
        $this->detail_model->addtableview($id);
        require_once("Views/index.php");
    }
}