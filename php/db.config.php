<?php


$servername = "fdb33.awardspace.net";
$username = "3917114_mazan";
$password = ".4.rP@.Y7wPcYXt";
$db = "3917114_mazan";



$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
