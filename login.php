<?php

$mail = $_POST["email"];
$pass = $_POST["password"];

//mysql_connect
//mysql_select_db

$q;

$q = mysql_query("select * from user where '$mail' = email and '$pass' = password");
    if ($row = mysql_fetch_array($q))
    {
        session_start();
        $_SESSION['email'] = $mail;
        echo "<script>
        window.location.href='Home.html';
        </script>";
    }
    else{
        echo "<script>
        alert('Usrname or password was incorrect');
        window.location.href='index.html';
        </script>";
    }


?>