<?php 
session_start();
//Read class details from Class table
include("connect.php");
include("class.php");

//get the ID in the anchor tags (e.g. '<a href="?id=1>"')
	$id = $_GET['id'];


//This selects the information I want to show to users from the Class table.
	$query = "SELECT ClassName, Instructor, Difficulty, Description FROM Class WHERE ClassID = ".$id.");";

	$result = mysqli_query($conn, $query);
	
	
	while($row = mysqli_fetch_array($result)) {
		//Displaying results on the page from the given row
		echo("<h3>{$row['ClassName']}</h3>")
		
	}







?>