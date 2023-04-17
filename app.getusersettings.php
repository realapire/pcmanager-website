<?php
include 'connection.php';

$username = $_GET["username"];

$query = mysqli_query($connection, "SELECT pcspecs_themeIndex, pcspecs_filterIndex FROM settings WHERE username='$username'");

while ($row = mysqli_fetch_assoc($query))
{
    echo "<p class='result1'>" . $row['pcspecs_themeIndex'] . "</p>";
    echo "<p class='result2'>" . $row['pcspecs_filterIndex'] . "</p>";
}

$connection -> close();

?>