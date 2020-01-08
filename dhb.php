<?php
$dbserver = "localhost";
$dbname = "inschrijven";
$dbusername = "root";
$dbpassword = "";

$conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname);


if (!$conn){
     die("connection failed: ".mysqli_connect_error());
}
?>