<?php
require_once dirname(__file__)."/controllers/HelloWorldController.class.php";

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $request = $_SERVER['REQUEST_URI'];

    $controller = new HelloWorldController();

    switch ($request) {
        case '/' :
            break;
        case '' :
            break;
        case '/users/firstname' :
            $results = $controller->getFirstNames();
            echo json_encode($results); 
            break;
        default:
            http_response_code(404);
            break;
    }

} else {
    http_response_code(404);
}

?>