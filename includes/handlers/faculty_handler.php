<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini_ismis";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>