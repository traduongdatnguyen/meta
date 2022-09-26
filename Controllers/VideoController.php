<?php
require_once("Models/video.php");
class VideoControler
{
    var $video_model;
    public function __construct()
    {
        $this->video_model = new video();
    }
    function list()
    {
        $data_categories = $this->video_model->categories();
        $data_catalogdetails = array();

        for ($i = 1; $i <= count($data_categories); $i++) {
            $data_catalogdetails[$i] = $this->video_model->catalogdetails($i);
        }
        $random_khuyenmai= $this->video_model->random_khuyenmai();
        require_once("Views/video/video.php");
    }
}
