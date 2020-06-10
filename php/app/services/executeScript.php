<?php
define('__ROOT__', dirname(__FILE__));
require_once(__ROOT__.'/dbHandler.php');

$filePath = $argv[1];

if (file_exists($filePath)) {
    echo "> file $filePath found.\n";

    $dbHandler = new dbHandler();
    $dbConnexion = $dbHandler->getIDConnexion();
    $dbHandler->executeScript($dbConnexion, $filePath);

} else {
    echo "> file $filePath not found.\n";
}
?>