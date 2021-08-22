<?php

$servername = "remotemysql.com";
$username = "ksxOkSj9lE";
$password = "Gl01D0sgrk";
$dbname = "ksxOkSj9lE";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
