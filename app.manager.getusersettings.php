<?php

include 'connection.php';

$username = $_GET["username"];

$query = mysqli_query($connection, "SELECT pcmanager_themeIndex FROM settings WHERE username='$username'");

while ($row = mysqli_fetch_assoc($query))
{
    echo "<p class='result'>" . $row['pcmanager_themeIndex'] . "</p>";
}

$connection -> close();

?>