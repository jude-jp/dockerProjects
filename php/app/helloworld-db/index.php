<?php
require_once dirname(__file__)."/services/dbHandler.php";

$db = new dbHandler();
$sqlQuery = "SELECT firstname FROM users";
$results = $db->executeQuery($sqlQuery);

echo "hello world ".$results[0]["firstname"];
?>