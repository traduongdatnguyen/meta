<?php
require_once("Models/blog.php");
class BlogsController
{
    var $blog_model;
    public function __construct()
    {
        $this->blog_model = new Blog();
    }
    function blogs()
    {
        $data_categories = $this->blog_model->categories();
        $data_catalogdetails = array();

        for ($i = 1; $i <= count($data_categories); $i++) {
            $data_catalogdetails[$i] = $this->blog_model->catalogdetails($i);
        }
        $list_blogs = $this->blog_model->list_blogs();
        require_once("Views/blogs/index.php");
    }
    function detail_blog()
    {
        $data_categories = $this->blog_model->categories();
        $data_catalogdetails = array();

        for ($i = 1; $i <= count($data_categories); $i++) {
            $data_catalogdetails[$i] = $this->blog_model->catalogdetails($i);
        }
        $id = $_GET['id'];
        $data_detail = $this->blog_model->detail_blog($id);
        require_once("Views/blogs/index.php");
    }
}
