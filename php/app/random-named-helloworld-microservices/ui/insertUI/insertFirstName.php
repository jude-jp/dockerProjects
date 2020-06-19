<?php
require_once dirname(__file__)."/controllers/HelloWorldController.class.php";

session_start();

$firstname_value = $_POST["firstName"];

if(isset($firstname_value)){

    $controller = new HelloWorldController();
    if($controller->insertFirstName($firstname_value) > 0){
        $_SESSION["succes"] = true;
    } else {
        $_SESSION["succes"] = false;

    }
    header("Location: insertFirstNameForm.php");
    exit();
}
else{
    echo "Please enter first name";
}
?>