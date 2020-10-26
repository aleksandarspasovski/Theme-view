<?php  

class Home extends BaseController
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->css = array('main/css/main.css');
	}
	public function index()
	{
		$this->view->render('main/index');
		
	}
	public function uploadImage()
	{
		echo 'uploadImage from Home contoller';
		
	}
}