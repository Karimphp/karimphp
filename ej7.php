<?php
class GeoIP extends Database{
        protected $ip;
        protected $Database;
        protected $result = array();

        public function __construct($ip){
                $this->ip = $ip;
                $this->Database = new Database();
        }

        public function getSqlResult(){
                $this->Database->createDbConnect();
                $this->result = $this->Database->executeQuery($this->ip);

                $name = array('Ciudad', 'Pais', "Latitud", "Longitud","Codigo Postal");

                for($i=0;$i<count($this->result);$i++){
                        echo $name[$i].": ".$this->result[$i]."\n";
                }
        }
}
class Database {
        protected $mysqli;

        protected function createDbConnect(){
                $this->mysqli = new mysqli("localhost", "root", "", "GeoIP");

                if ($this->mysqli->connect_errno) {
                    echo "Fallo al conectar a MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
                }
        }

        protected function executeQuery($ip){
                $result = array();
                $sql = "SELECT cities_locations.city_name, cities_locations.country_name, cities_blocks_ip4.latitude, cities_blocks_ip4.longitude, cities_blocks_ip4.postal_code FROM cities_locations RIGHT JOIN cities_blocks_ip4 ON cities_locations.geoname_id = cities_blocks_ip4.geoname_id WHERE cities_blocks_ip4.network= ?";

                if ($sentencia = $this->mysqli->prepare($sql)) {
                        $sentencia->bind_param("s", $ip);
                        $sentencia->execute();

                        $sentencia->bind_result($result[0],$result[1],$result[2],$result[3], $result[4]);
                        $sentencia->fetch();
                }

                return $result;
        }
}

$search = new GeoIP($argv[1]);
$search->getSqlResult();

?>