<?php
//session to pass variable from class details page to edit script
session_start();
include("connect.php");
include("details_edit.php");
	

$id = $_GET['id'];

if ($_POST) {
	$classname = $_POST['ClassName'];
	$instructor = $_POST['Instructor'];
	$difficulty = $_POST['Difficulty'];
	$description = $_POST['Description'];
	
	
	$sql = "UPDATE Class SET ClassName = '$classname', Instructor = '$instructor', Difficulty = '$difficulty', Description = '$description' WHERE ClassID = $id;";
	

	
 if(mysqli_query($conn, $sql)) {
	 
 header("Location: https://sewa-part--tzlmp.run-eu-central1.goorm.io/SEWA3_PART_2/success.php");
 }
 else{
 header("Location: https://sewa-part--tzlmp.run-eu-central1.goorm.io/SEWA3_PART_2/failure.php");
 }
	 }


?>