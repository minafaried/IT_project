<?php
$admin=$_GET["admin"];
$model=$_GET["model"];
$email=$_GET["email"];
$connectioni=new mysqli("localhost","root","","it");
$q = "INSERT INTO buy(`mail`,`model`) 
VALUES ('$email','$model')";

$connectioni->query($q) ;
    $x="Location:http://localhost:8080/project/IT_project/Home/home.php?admin=".$admin." & email=".$email;
    header($x);


?>
