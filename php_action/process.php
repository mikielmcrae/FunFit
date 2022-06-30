<?php
session_start();

include("connect.php");


$email = $_POST["email"];
$pass = $_POST["password"];


$sql = "SELECT * FROM User WHERE Email='".$email."' AND Pass='".$pass."';";

if ($email && $pass) {
	$result = mysqli_query($conn, $sql);
	
} 


if(mysqli_num_rows($result) == 1) {
	
// 	login successful if there's a match
//get user's name from User table
	while($row = mysqli_fetch_array($result)) {
		
		$_SESSION['FirstName'] = $row['FirstName'];
		
		if ($email == 'admin@admin.com') {
		
		header("Location: https://sewa-part--tzlmp.run-eu-central1.goorm.io/SEWA3_PART_2/index_loggedin.php");
			
			
		}
		else {
		echo($_SESSION['FirstName']);
		header('Location: https://sewa-part--tzlmp.run-eu-central1.goorm.io/SEWA3_PART_2/index_loggedin.php');
	  	}
	}
	
	//if Admin, send to edit page
	

	
}
// else {
// 	header('Location: https://sewa-part--tzlmp.run-eu-central1.goorm.io/SEWA3_PART_2/failure.php');
	
// }

	
?>