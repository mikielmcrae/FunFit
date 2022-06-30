<?php
//establishing connection to the DB
$servername = "localhost";
$username = "phpmyadmin";
$password = "root";
$dbname = "funfit";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	
  die("Connection failed: " . mysqli_connect_error());
}


?>