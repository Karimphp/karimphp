<?php

require_once('libs/Controller.php');
require_once('app/Models/GeoIPModel.php');

class SearchGeoIPController extends Controller {
	
	public function execute($params = array()) {

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			if(filter_has_var(INPUT_POST, 'IP') && filter_has_var(INPUT_POST, 'NETMASK')){
				$ip = filter_input(INPUT_POST, 'IP');
				$netmask = filter_input(INPUT_POST, 'NETMASK');

				$search = new GeoIP($ip, $netmask);
				$result = $search->getSqlResult();  

				require('app/Views/geoIP.view.php');	
			}
		}
		else{
			require('app/Views/home.view.php');
		}
	}
}

?>