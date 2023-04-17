<?php
include 'connection.php';

$username = $_GET["username"];

$query = mysqli_query($connection, "SELECT DISTINCT class FROM win32classes WHERE username='$username'");

while ($row = mysqli_fetch_assoc($query))
{
    echo "<p class='result'>" . $row['class'] . "</p>";
}

$connection -> close();

?>