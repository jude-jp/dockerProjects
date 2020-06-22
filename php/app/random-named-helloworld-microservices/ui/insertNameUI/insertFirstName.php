<?php
define("API_INSERTNAME_NAME", $_ENV["API_INSERTNAME_NAME"]);
$url = "http://" . API_INSERTNAME_NAME . "/user/firstname";

session_start();

$firstname_value = $_POST["firstname"];

if(!empty(trim($firstname_value))){

    $postdata = http_build_query(
        array(
            'firstname' => $firstname_value
        )
    );

    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-Type: application/x-www-form-urlencoded',
            'content' => $postdata
        )
    );
                       
    $context  = stream_context_create($opts);
    $response = json_decode(file_get_contents($url, FALSE, $context), true);

    if($response['status'] == 200) {
        $_SESSION["succes"] = true;
        $_SESSION["responseCode"] = $response["payload"];
    } else {
        $_SESSION["succes"] = false;
    }
    header("Location: index.php");
    exit();
}
else{
    echo "Please enter first name";
}
?>