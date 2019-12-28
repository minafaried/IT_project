<?php
$admin=$_GET["admin"];
$model=$_GET["model"];
//$mail=$_GET["email"];
$connectioni=new mysqli("localhost","root","","it");

$q = "select  counter from mobile where name='$model'";
$result = $connectioni->query($q);
while ($row = $result->fetch_assoc()) {
$counter=$row["counter"];

$counter=$counter-1;
$q = "UPDATE  mobile Set counter='$counter' where name='$model'";

if ($connectioni->query($q) == TRUE) {
    session_start();
   // header("Location:http://localhost:8080/project/IT_project/Home/home.php?email="+$mail+" $ admin="+$admin );
} else {
  //  header("Location:http://localhost:8080/project/IT_project/Home/home.php?email="+$mail+" $ admin="+$admin );

}
}
?>
