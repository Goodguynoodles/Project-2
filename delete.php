<?php
$id = $_GET["id"];
include("./connectdb.php");
$sql = "SELECT * FROM applicatie WHERE `id` = $id";
$result = mysqli_query($conn, $sql);
$record = mysqli_fetch_assoc($result);
$up = "DELETE FROM `applicatie` WHERE `applicatie`.`ID` = '$id'";

// echo $up;exit();
mysqli_query($conn, $up);

header("Location: ./index.php?content=info");

?>

<input type="hidden" name="id" value="<?php echo $id; ?>">