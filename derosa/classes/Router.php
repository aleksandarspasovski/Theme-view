<?php 

class Router
{
	// private $url;
	
	function __construct()
	{
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		// var_dump($_SERVER);die;
		// print_r($url);
		if (empty($url[0])) {
			require('./controller/Welcome.php');
			$controller = new Welcome();
			$controller->index();
			// var_dump('main page Welcome');
			return false;
		}
		$file = 'controller/' .$url[0]. '.php';
		if (file_exists($file)) {
			require $file;
			// var_dump('main page2');
		} else{
			require('./controller/Errors.php');
			$controller = new Errors();
			$controller->index();
			return false;
		}
		$controller = new $url[0];
		$controller->loadModel($url[0]);
		
		if (isset($url[2])) {
			if (method_exists($controller, $url[1])) {
				$controller->{$url[1]}($url[2]);
				var_dump('main page3');
			} else {
				require('./controller/Errors.php');
				$controller = new Errors();
				$controller->index();
				return false; 
			}
		} else{
			if (isset($url[1])) {
				if (method_exists($controller, $url[1])) {
					$controller->{$url[1]}();
				} else{
					require('./controller/Errors.php');
					$controller = new Errors();
					$controller->index();
					return false; 
				} 
			} else{
				$controller->index();
			}
		}	
		// include './view/main/index.php';
		// $route = '<a href="#">da</a>';
		// echo $route;
	}
}