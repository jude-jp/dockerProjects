<?php

/**
 * Cette classe permet d'exploiter la BDD.
 * @author Jude JEAN-PIERRE
 */

define("DB_NAME", $_ENV['DB_NAME']);
define("DB_USERNAME", $_ENV['DB_USERNAME']);
define("DB_PASSWORD", $_ENV['DB_PASSWORD']);

class dbHandler {

	public function __construct(){
		$this->getIDConnexion();
	}
	
	public function executeQuery($query){

    $db = $this->getIDConnexion();
    $sth = $db->prepare($query);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;
	}
	
	public function getIDConnexion(){

    try {
        $conn = new PDO("mysql:host=".$this->getDBHost().";port=".$this->getDBPort().";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
  }
  
  private function getDBHost() {
    return isset($_ENV['DB_HOST']) ? $_ENV['DB_HOST'] : 'db';
  }
  
  private function getDBPort() {
    return isset($_ENV['DB_PORT']) ? $_ENV['DB_PORT'] : '3306';
  }

}

?>