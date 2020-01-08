<?php
if (isset($_post['submit'])){

    require 'dhp.php';

    $password = $_POST['password'];
    $username = $_POST['username'];

    if (empty($password or $username)){
        header("location: /index.php?error=emptyfields");
    exit()  
    }
    else{
        $sql = "SELECT * FROM user WHERE username=? OR password=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt , $sql)){
            header("location: /index.php?error=gay");
    exit()  
        }
    }
}
else{
    header("location: /index.php");
    exit()  
}   
?>