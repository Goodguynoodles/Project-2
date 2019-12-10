<?php
$dbserver = "localhost";
$dbname = "inschrijven";
$dbusername = "root";
$dbpassword = "";

$conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname);

$firstname = $_POST["firstname"];
$infix = $_POST["infix"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$opleiding = $_POST["opleiding"];
$tel = $_POST["tel"];
$bur = $_POST["bur"];
$query = "INSERT INTO `applicatie` (
    `ID`, 
    `firstname`, 
    `infix`, 
    `lastname`, 
    `E-mail`, 
    `opleiding`, 
    `tel`, 
    `burgerserversnummer`) 
    VALUES (NULL, 
    '$firstname', 
    '$infix', 
    '$lastname', 
    '$email', 
    '$opleiding', 
    '$tel', 
    '$bur'
    );";

mysqli_query($conn, $query);

//header("Location: ./index.php?dick=oke");
header("Refresh: 3; ./index.php?content3=inschrijven")
?>

<h3 class="box">bedankt kut</h3>