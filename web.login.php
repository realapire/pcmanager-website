<?php
include 'connection.php';

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $encpassword = sha1($password);
    $query = mysqli_query($connection, "SELECT * FROM users WHERE username='$username' AND password='$encpassword'");
    
    if(mysqli_num_rows($query) > 0){
        session_start();
        $_SESSION["username"] = $username;
        header("location: profile.php");
        exit();
    } else {
        header("location: loginpage.php?error=notfound");
        exit();
    }

    $connection -> close();
} else {
    header("location: loginpage.php");
    exit();
}
