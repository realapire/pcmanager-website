<?php
include 'connection.php';

$username = $_GET["username"];
$event = $_GET["event"];
$timestamp = $_GET["timestamp"];

switch($event) {
    case 1:
        $query = mysqli_query($connection, "UPDATE timestamps SET cleaner_timestamp='$timestamp' WHERE username='$username'");
        break;
    case 2:
        $query = mysqli_query($connection, "UPDATE timestamps SET renewip_timestamp='$timestamp' WHERE username='$username'");
        break;
    case 3:
        $query = mysqli_query($connection, "UPDATE timestamps SET releaseip_timestamp='$timestamp' WHERE username='$username'");
        break;
    case 4:
        $query = mysqli_query($connection, "UPDATE timestamps SET flushdns_timestamp='$timestamp' WHERE username='$username'");
        break;
}

if($query) {
    echo "<p>Succesful</p>";
}

$connection -> close();

?>