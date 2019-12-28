<?php
$user_name = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$admin_code = $_POST["adminCode"]

mysqli("localhost","root","","it");

$q="INSERT INTO user(`username`,`email`,`password`,`phone`,`adminCode`) VALUES ('$user_name','$email','$password','$phone','$admin_code')";


if ($q) {
    session_start();
    $_SESSION['username'] = $user_name;
    echo "<script>
    alert('Registertion is completed');
    window.location.href='Home.html';
    </script>";
 

}
else{ 
    echo "<script>
    alert('Registertion is failed, this username is existed');
    window.location.href='Sign-up.html';
    </script>";
}
mysql_close();
?>