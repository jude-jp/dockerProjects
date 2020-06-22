<?php
session_start();
?>

<form action="insertFirstName.php" method="post">
    <p>Enter first name : 
        <input type="text" name="firstname" />
        <input type="submit" value="Insert">
    </p>
</form>
<?php 

if(isset($_SESSION["succes"])){
    if($_SESSION["succes"]){

        if($_SESSION["responseCode"] === 1){
            echo "Successfully inserted !";
        }else {
            echo "Already inserted !";
        }

    } else {
        echo "Error during communication with API";
    }
} 

session_destroy();
?>