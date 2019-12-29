<?php
$user_name = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$admin_code = $_POST["adminCode"];

$connectioni=new mysqli("localhost","root","","it");
$q = "INSERT INTO user(`username`,`email`,`password`,`phone`,`adminCode`) 
VALUES ('$user_name','$email','$password','$phone','$admin_code')";

if ($connectioni->query($q) == TRUE) {
    session_start();
    $_SESSION['username'] = $user_name;
    if ($admin_code == '2020') {

        header("Location:http://localhost:8080/project/IT_project/Home/home.php?admin=true&email="+$email);
    } else {
        header("Location:http://localhost:8080/project/IT_project/Home/home.php?admin=false&email="+$email);
    }} else {
    header("Location:http://localhost:8080/project/IT_project/Sign-up.html");

}
