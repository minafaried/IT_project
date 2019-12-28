<?php

// Grab User submitted information
$email = $_POST["email"];
$pass = $_POST["password"];

// Connect to the database
$con = new mysqli("localhost", "root", "", "it");
// Make sure we connected successfully
if (!$con) {
    die('Connection Failed' . $con);
}


$q = "SELECT `email`, `password`,`adminCode` FROM user WHERE `email` = '$email'";
$result = $con->query($q);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        if ($row["email"] == $email && $row["password"] == $pass) {
            if ($row["adminCode"] == '2020') {

                header("Location:http://localhost:8080/project/IT_project/Home/home.php?admin=true");
            } else {
                header("Location:http://localhost:8080/project/IT_project/Home/home.php?admin=false");
            }
        } else {
            header("Location:http://localhost:8080/project/IT_project/login.html");
        }
    }
} else {

    header("Location:http://localhost:8080/project/IT_project/login.html");
}
