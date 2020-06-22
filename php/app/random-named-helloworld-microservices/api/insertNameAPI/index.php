<?php
require_once dirname(__file__)."/controllers/HelloWorldController.class.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $request = $_SERVER['REQUEST_URI'];

    $controller = new HelloWorldController();

    switch ($request) {
        case '/' :
            break;
        case '' :
            break;
        case '/user/firstname' :
            $results = $controller->insertFirstName($_POST["firstname"]);
            print_r($results);
            break;
        default:
            http_response_code(404);
            break;
    }

} else {
    http_response_code(404);
}

?>