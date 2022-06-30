<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>
<body>
	<?php 
session_start();
include("php_action/connect.php");
include("header_loggedin.php");
	include("php_action/process.php");

	//reading data from Class table and displaying it
	//using GET from the class page to give further details based on link id
	$id = $_GET['id'];

	$query = "SELECT ClassName, Instructor, Difficulty, Description FROM Class WHERE ClassID = ".$id.";";

	$result = mysqli_query($conn, $query);

	if(!$result) {
echo("failure to connect to database.");
	}
	
	//Displaying data:
// 	mysqli_fetch_array() lets us access specific values from the given row
	while($row = mysqli_fetch_array($result)) {
		$classname = $row['ClassName'];
		$instructor = $row['Instructor'];
		$difficulty = $row['Difficulty'];
		$description = $row['Description'];
		
		echo("<ul>");
// 		formatting info from the Class table
		echo("<li>");
// 		utilising classes for consistent styling
		echo("<a href='#' class='site-link class-details' id='classes'>");
		echo("<h3'>{$classname}</h3>");
		echo("<p class='further-info'>Led by {$instructor}</p>");
		echo("<p class='further-info'>Difficulty: {$difficulty}</p>");
		echo("</a>");
		echo("</li>");
		echo("<p class='about class-info'>{$description}</p>");
		echo("</ul>");
		
		if($_SESSION['FirstName'] == 'Administrator') {
	echo("<a href='details_edit.php?id=$id'><button class='btn'>Edit</button></a>");
		}
		
	}

?>
  
 
