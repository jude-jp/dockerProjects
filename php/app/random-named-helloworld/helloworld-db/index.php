<?php
require_once dirname(__file__)."/controllers/helloworldController.php";

$controller = new $HelloWorldController();
$results = $controller->getFirstNames();

$resultsSize = count($results);
$randomNumber = rand(0, $resultsSize-1);

echo "hello world ".$results[$randomNumber]["firstname"];
?>