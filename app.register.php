<?php
include 'connection.php';

$username = $_GET["username"];
$userpass = sha1($password);

$insert = "INSERT INTO users (username, password) VALUES ('$username', '$userpass')";

$check_username = mysqli_query($connection, "SELECT username FROM users WHERE username = '$username' ");

if(mysqli_num_rows($check_username) > 0){
    echo "<p class='taken'>Taken</p>";
}

else {
    if ($connection->query($insert) === TRUE) {
    echo "<p class='succesful'>Succesful</p>";
    }
}

$connection -> close();
