<?php
include 'connection.php';

$username = $_GET["username"];
$class = $_GET["class"];

$insert = "INSERT INTO win32classes (username, class) VALUES ('$username', '$class')";

if ($connection->query($insert) === TRUE) {
        echo "<p class='succesful'>Succesful</p>";
}

$connection -> close();
