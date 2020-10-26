<?php  

class Welcome extends BaseController
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->css = array('welcome/css/main.css');
		$this->view->js = array('welcome/js/welcome.js');
	}
	public function index()
	{
		$this->view->render('welcome/welcome');
		
	}
}