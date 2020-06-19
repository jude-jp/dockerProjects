<?php

/**
 * Cette classe permet d'exploiter la BDD.
 * @author Jude JEAN-PIERRE
 */

define("DB_NAME", $_ENV['DB_NAME']);
define("DB_USERNAME", $_ENV['DB_USERNAME']);
define("DB_PASSWORD", $_ENV['DB_PASSWORD']);

class DBHandler {

  private $db;

	public function __construct(){
    $this->db = $this->getIDConnexion(DB_NAME);
  }
	
	public function executeSelectQuery($query){

    try {
      $sth = $this->db->prepare($query);
      $sth->execute();
  
      $result = $sth->fetchAll();
      return $result;

    } catch (PDOException $e) {
      die($query . "<br>" . $e->getMessage()); 
    }
  }
	
	public function getIDConnexion($dbname = null){

    $addDatabaseName = "";

    if ($dbname) {
      $addDatabaseName = ";dbname=$dbname";
    }

    try {
        $conn = new PDO("mysql:host=" . $this->getDBHost() . ";port=" . $this->getDBPort() . "" 
        .$addDatabaseName, DB_USERNAME, DB_PASSWORD);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
      } catch(PDOException $e) {
        echo "> Connection failed: " . $e->getMessage() . "\n";
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