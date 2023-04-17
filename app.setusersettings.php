<?php
include 'connection.php';

$username = $_GET["username"];
$themeindex = $_GET["theme"];
$filterindex = $_GET["filter"];

$query = mysqli_query($connection, "UPDATE settings SET pcspecs_themeIndex='$themeindex', pcspecs_filterIndex='$filterindex' WHERE username='$username'");

if($query){
    echo "<p>Succesful</p>";
}

$connection -> close();

?>