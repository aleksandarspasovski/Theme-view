<?php 


class Register extends BaseController
{
	
	function __construct()
	{
		parent::__construct();
		// $this->view->css = array('register/css/main.css');
	}
	public function index()
	{
		$this->view->render('register/index');
		
	}
} 