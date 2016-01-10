<?php

require_once('libs/Controller.php');

class ErrorController extends Controller {
	
	public function execute($params = array()) {
		require('app/Views/error.view.php');
	}
}

?>
