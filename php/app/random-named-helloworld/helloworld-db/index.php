<?php
require_once dirname(__file__)."/services/dbHandler.php";

$db = new dbHandler();
$sqlQuery = "SELECT firstname FROM users";
$results = $db->executeQuery($sqlQuery);

$resultsSize = count($results);
$randomNumber = rand(0, $resultsSize-1);

echo "hello world ".$results[$randomNumber]["firstname"];
?>