<?php
require_once("Models/home.php");
class HomeController
{
    var $home_model;
    public function __construct()
    {
        $this->home_model = new home();
    }
    function list()
    {
        $data_categories = $this->home_model->categories();
        $data_catalogdetails = array();

        for ($i = 1; $i <= count($data_categories); $i++) {
            $data_catalogdetails[$i] = $this->home_model->catalogdetails($i);
        }

        $data_slider = $this->home_model->slider();

        $data_limit = $this->home_model->best_phone_products();

        $random_khuyenmai = $this->home_model->random_khuyenmai();

        $data_liveviews = $this->home_model->liveviews();
        $data_laptap = $this->home_model->products(2,3,0,12);
        //Xem nhiều nhất
        $data_accessories = $this->home_model->products(8,8,0,12);

        
        $top_rated = $this->home_model->liveviews();
        //Xem nhiều nhất
        $best_selling = $this->home_model->sanphambanchay();

        $product_hot = $this->home_model->product_hot();
        $on_sale = $this->home_model->sale();
        $data_recommendationforyou = $this->home_model->random(0, 12);
        require_once("Views/index.php");
    }
}
