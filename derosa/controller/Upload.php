<?php  

class Upload extends BaseController
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->css = array('upload/css/main.css');
	}
	public function index()
	{	
		$this->view->img = $this->model->listImg();
		$this->view->render('upload/upload');
		// echo 'upload controller active now';
		
	}
	public function uploadImage()
	{	
		$dir_name = strtolower($_POST['name']);
		$dir_name_l = strtolower($_POST['last_name']);

		$image_size = $_FILES['upload']['size'];
		$image_type = strtolower(pathinfo($_FILES['upload']['name'],PATHINFO_EXTENSION));

		// var_dump($_FILES['upload']);die;

		$base_dir = './uploads/'.$dir_name.'_'.$dir_name_l.'/';
		$this->createIfDoesntExist($base_dir);
		$base_name = $base_dir. basename($_FILES['upload']['name']);

		if ($image_type != 'jpg' && $image_type != 'png' && $image_type != 'gif' && $image_type != 'jpeg') {
			// return header('location:' .$_SERVER['HTTP_REFERER']. '?err=only JPG JPEG PNG and GIF files are allowed');
			echo "only JPG, JPEG, PNG & GIF files are allowed";
			return false;
			exit;
		}
		if ($image_size > 500000) {
			echo '<br>'.'Image size is too large';
			return false;
			exit;
		}

		$upload_file = move_uploaded_file($_FILES['upload']['tmp_name'], $base_name);

		if ($upload_file) {
			$upload_db = new Upload_model();
	        if ($upload_db->insertImage($base_name, $dir_name)) {
	        	return header('location:'. $_SERVER['HTTP_REFERER']. '?uspesno uploadovana slika');
	        }
	    } else {
	        echo 'Sorry, there was an error uploading your file.';
	    }

		// var_dump($base_name);die;
		
	}
	private function createIfDoesntExist($base_dir){
		$base_dir_content = glob($base_dir);
		if (!$base_dir_content) {
			mkdir($base_dir);
		}
	}
}