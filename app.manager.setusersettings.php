<?php
include 'connection.php';

$username = $_GET["username"];
$themeindex = $_GET["theme"];

$query = mysqli_query($connection, "UPDATE settings SET pcmanager_themeIndex='$themeindex' WHERE username='$username'");

if($query){
    echo "<p>Succesful</p>";
}

$connection -> close();

?>