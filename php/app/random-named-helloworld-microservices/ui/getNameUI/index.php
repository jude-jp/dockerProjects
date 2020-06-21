<?php
define("API_GETNAME_NAME", $_ENV['API_GETNAME_NAME']);

$url = "http://" . API_GETNAME_NAME . "/users/firstname";

$response = file_get_contents($url);

if ($response != FALSE) {
    $results = json_decode($response, true);

    $resultsSize = count($results);
    $randomNumber = rand(0, $resultsSize-1);
    
    echo "Hello, " . $results[$randomNumber]["firstname"] . ".";
} else {
    echo "API non disponible...";
}

?>