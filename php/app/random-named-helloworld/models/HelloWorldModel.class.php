<?php
require_once dirname(__file__)."/../services/DBHandler.class.php";

class HelloWorldModel{

    private $db;

	public function __construct(){
        $this->db = new dbHandler();
    }

    function getFirstNames(){
        $sqlQuery = "SELECT firstname FROM users";
        $results = $this->db->executeSelectQuery($sqlQuery);
        return $results;
    }

    function insertFirstName($firstname){
        $sqlQuery = "INSERT INTO users(firstname) VALUES ('$firstname')";
        $results = $this->db->executeInsertQuery($sqlQuery);
        return $results;
    }
}

?>