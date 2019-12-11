<?php
$dbserver = "localhost";
$dbname = "inschrijven";
$dbusername = "root";
$dbpassword = "";

$conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname);

$ID = $_POST["id"];

$query = "DELETE FROM `applicatie` WHERE `applicatie`.`ID` = '$ID'";

mysqli_query($conn, $query);

//header("Location: ./index.php?dick=oke");
header("Refresh: 3; ./index.php?content5=info")
?>

<h3 class="box">bedankt kut</h3>