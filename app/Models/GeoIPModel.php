<?php

	include_once "libs/Database.php";
	require_once('libs/IPv4.php');

	class GeoIP extends Database{
		protected $ip;
		protected $netmask;
		protected $Database;

		public function __construct($ip, $netmask){
			$this->ip = $ip;
			$this->netmask = $netmask;
			$this->Database = new Database();
		}

		public function getSqlResult(){
			$this->Database->createDbConnect();

			$newIp = $this->getNetwork($this->ip, $this->netmask);

			return $this->Database->executeQuery($newIp);
		}

		protected function getNetwork($ip, $netmask){
			$ip_calc = new Net_IPv4();
			$ip_calc->ip = $ip;
			$ip_calc->netmask = $netmask;
			$error = $ip_calc->calculate();
			if (!is_object($error)) {
				return $ip_calc->network."/".$ip_calc->bitmask;
			}
			else {
				return null;
			}
		}
	}

?>