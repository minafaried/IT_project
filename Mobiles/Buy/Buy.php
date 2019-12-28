<?php

$credit = $_POST["Credit"];
$phone = $_POST["phone"];

//mysql_connect
//mysql_select_db

$q;

$q = mysql_query("select * from user where '$credit' = Credit and '$phone' = phone");
    if ($row = mysql_fetch_array($q))
    {
        session_start();
        $_SESSION['Credit'] = $credit;
        
        echo "<script>
        alert ('Buying done successfully');
        window.location.href='Home.html';
        </script>";
    }
    else{
        echo "<script>
        alert('Credit or Phone was incorrect');
        window.location.href='Buy.html';
        </script>";
    }


?>