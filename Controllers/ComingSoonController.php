<?php
require_once("Models/home.php");
class ComingSoonController
{
    var $ComingSoon_model;
    public function __construct()
    {
        $this->ComingSoon_model = new home();
    }
    function list()
    {
        $data_categories = $this->ComingSoon_model->categories();
        $data_catalogdetails = array();

        for ($i = 1; $i <= count($data_categories); $i++) {
            $data_catalogdetails[$i] = $this->ComingSoon_model->catalogdetails($i);
        }
        $ComingSoon_data = $this->ComingSoon_model->comingsoon();
        require_once("Views/shop/coming-soon.php");
    }
}
