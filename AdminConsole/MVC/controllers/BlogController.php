<?php
require_once("MVC/Models/blog.php");
class BlogsController
{
	var $blog_model;
	function __construct()
	{
		$this->blog_model = new Blogs();
	}

	function list()
	{
		$data = array();
		$data = $this->blog_model->All(); 
		require_once("MVC/Views/Admin/index.php");
	}

	public function add()
	{
		require_once("MVC/Views/Admin/index.php");
	}
	public function store()
	{
        $target_dir = "../public/assets/images/blog/";  // thư mục chứa file upload
        $HinhAnh = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh = basename($_FILES["HinhAnh"]["name"]);
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
		$data = array(
			'TenBL' => $_POST['TenBL'],
			'HinhAnh' => $HinhAnh,
            'TomTat' => $_POST['TomTat'],
			'MoTa' => $_POST['MoTa'],
            'NgayDang' => $ThoiGian,
            'TacGia' => 'Trà Dương Đạt Nguyên',
            'TypePost' => 'All'
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->blog_model->store($data);
	}
	public function detail()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->blog_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('views/categories/detail.php');
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->blog_model->delete($_GET['id']);
		}
	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		$data = $this->blog_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('views/categories/edit.php');
	}
	public function update()
	{
        $target_dir = "../public/assets/images/blog/";  // thư mục chứa file upload
        $HinhAnh = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh = basename($_FILES["HinhAnh"]["name"]);
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
		$data = array(
            'MaBlogs' => $_POST['MaBlogs'],
			'TenBL' => $_POST['TenBL'],
			'HinhAnh' => $HinhAnh,
            'TomTat' => $_POST['TomTat'],
			'MoTa' => $_POST['MoTa'],
            'NgayDang' => $ThoiGian,
            'TacGia' => 'Trà Dương Đạt Nguyên',
            'TypePost' => 'All'
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        if ($HinhAnh == "") {
            unset($data['HinhAnh']);
        }
		$this->blog_model->update($data);
	}
}
