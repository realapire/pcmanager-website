<?php
include 'connection.php';

$username = $_GET["username"];
$password = $_GET["password"];    
$encpassword = sha1($password);
$query = mysqli_query($connection, "SELECT * FROM users WHERE username='$username' AND password='$encpassword'");


if(mysqli_num_rows($query) > 0){
    echo "<p class='found'>OK</p>";
} else {
    echo "<p class='failed'>Failed</p>";
}

$connection -> close();

?>