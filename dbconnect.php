<?php

$servername = "remotemysql.com";
$username = "3hxp1e9Cn7";
$password = "Tx0TwRLXhU";
$dbname = "3hxp1e9Cn7";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
