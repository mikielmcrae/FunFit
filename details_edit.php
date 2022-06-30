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


	//reading data from Class table and displaying it
	//using GET from the class page to give further details based on link id
	$id = $_GET['id'];
	
	

	$query = "SELECT ClassName, Instructor, Difficulty, Description FROM Class WHERE ClassID = ".$id.";";

	$result = mysqli_query($conn, $query);

	if(!$result) {
		header("Location: https://sewa-part--tzlmp.run-eu-central1.goorm.io/SEWA3_PART_2/failure.php");
echo("failure to connect to database.");
	}
	
	//Displaying data:
// 	mysqli_fetch_array() lets us access specific values from the given row
	while($row = mysqli_fetch_array($result)) {
		$classname = $row['ClassName'];
		$instructor = $row['Instructor'];
		$difficulty = $row['Difficulty'];
		$description = $row['Description'];
		
		
		echo("<form method='post' action='php_action/edit.php?id={$id}'>");
		//echo($_SESSION[$id]);
// 		formatting info from the Class table

// 		utilising classes for consistent styling
		echo("<a href='#' class='site-link class-details' id='classes'>");
		echo("<textarea type='text' name='ClassName' placeholder='Class Name' placeholder='Class Name'>$classname</textarea>");
		echo("<p class='editable further-info'>Led by <input type='text' name='Instructor' placeholder='Instructor' value='$instructor'></input></p>");
		echo("<p class='editable further-info'>Difficulty: <input type='text' name='Difficulty' placeholder='Difficulty Level' value='$difficulty'></input></p>");
		echo("</a>");
		
		echo("<p class='about class-info'><textarea type='text' class='description class-info'  name='Description' placeholder='Description'>$description</textarea></p>");
		echo("<button type='submit' class='btn'>Submit changes</button>");
		
		echo("</form>");
	}

?>
  
 
