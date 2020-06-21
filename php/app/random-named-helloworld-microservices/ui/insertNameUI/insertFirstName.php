<?php
define("API_INSERTNAME_NAME", $_ENV["API_INSERTNAME_NAME"]);

session_start();

$firstname_value = $_POST["firstName"];

if(isset($firstname_value)){

    $url = "http://" . API_INSERTNAME_NAME . "/user/firstname";

    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'content' => $firstname_value,
            'timeout' => 60
        )
    );
                       
    $context  = stream_context_create($opts);

    $response = file_get_contents($url, FALSE, $context);

    if(response != FALSE){
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