<?php
	//Display app errors.
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$request_url = $_SERVER["REQUEST_URI"];	
	
	$routes = array(
		"/" => array(
			"controller" => "SearchGeoIPController",
			"params" => array(),
			),
		);

	if(isset($routes[$request_url])) {
		$controller = $routes[$request_url]["controller"];
		$params = $routes[$request_url]["params"];
	}
	else {
		$controller = "ErrorController";
		$params = array();
	}

	require_once("app/Controllers/$controller.php");

	$instance = new $controller();
	$instance->execute($params);

?>