<?php

/**
 * Cette classe permet d'exploiter la BDD.
 * @author Jude JEAN-PIERRE
 */

define("DB_NAME", $_ENV['DB_NAME']);
define("DB_USERNAME", $_ENV['DB_USERNAME']);
define("DB_PASSWORD", $_ENV['DB_PASSWORD']);

class dbHandler {

	public function __construct(){}
	
	public function executeQuery($query){

    $db = $this->getIDConnexion(DB_NAME);
    $sth = $db->prepare($query);
    $sth->execute();

    $result = $sth->fetchAll();

    return $result;
  }
  
  public function executeScript($db, $filePath){

    echo "> Processing script $filePath execution...\n";

    $query = file_get_contents($filePath);
    $stmt = $db->prepare($query);
		
		if($db) {

      if ($stmt->execute()){
        echo "> script $filePath execution done.\n";
      } else {
        echo "> Error during script $filePath execution.\n";
      }
			 
		} else {
      echo "> Database connexion not found\n";
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
        // set the PDO error mode to exception
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