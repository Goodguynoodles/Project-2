<?php
include("./connectdb.php");
// $sql = "SELECT * FROM bezorginfo";

$id = $_POST["id"];
$firstname = $_POST["firstname"];
$infix = $_POST["infix"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$opleiding = $_POST["opleiding"];
$tel = $_POST["tel"];
$bur = $_POST["bur"];


$up = " UPDATE `applicatie` 
SET `firstname` = '$firstname', 
`infix` = '$infix', 
`lastname` = '$lastname', 
`E-mail` = '$email', 
`opleiding` = '$opleiding', 
`tel` = '$tel', 
`burgerserversnummer` = '$bur' 
WHERE `applicatie`.`ID` = $id ";

// echo $up;exit();
mysqli_query($conn, $up);

header("Location: ./index.php?content=info");
?>