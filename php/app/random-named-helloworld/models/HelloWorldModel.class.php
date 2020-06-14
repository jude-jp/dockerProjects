<?php
require_once dirname(__file__)."/../services/DBHandler.class.php";

class HelloWorldModel{

    function getFirstNames(){

        $db = new dbHandler();
        $sqlQuery = "SELECT firstname FROM users";
        $results = $db->executeQuery($sqlQuery);
        return $results;
    }
}

?>