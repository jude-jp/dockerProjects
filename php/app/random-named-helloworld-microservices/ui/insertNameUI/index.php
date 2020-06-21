<?php
session_start();
?>

<form action="insertFirstName.php" method="post">
    <p>Enter first name : 
        <input type="text" name="firstName" />
        <input type="submit" value="Insert">
    </p>
</form>
<?php 

if(isset($_SESSION["succes"])){
    if($_SESSION["succes"]){
        echo "Inseré avec succes !";
    } else {
        echo "Erreur durant l'insertion";
    }
} 

session_destroy();
?>