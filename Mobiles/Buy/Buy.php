<?php
$admin=$_GET["admin"];
$model=$_GET["model"];
$mail=$_GET["email"];
$connectioni=new mysqli("localhost","root","","it");
$q = "INSERT INTO buy(`email`,`model`) 
VALUES ('$email','$mail')";

if ($connectioni->query($q) == TRUE) {
    session_start();
    header("Location:http://localhost:8080/project/IT_project/Home/home.php?email="+$mail+" $ admin="+$admin );
} else {
    header("Location:http://localhost:8080/project/IT_project/Home/home.php?email="+$mail+" $ admin="+$admin );

}

?>
