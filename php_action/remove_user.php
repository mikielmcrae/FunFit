<?php
	include("connect.php");
$id = $_GET['id'];
	$sql = "DELETE FROM User WHERE UserID = $id;";

$result = mysqli_query($conn, $sql);

if($result){
	header('Location: https://sewa-part--tzlmp.run-eu-central1.goorm.io/SEWA3_PART_2/success.php');
	
}
else{
	header('https://sewa-part--tzlmp.run-eu-central1.goorm.io/SEWA3_PART_2/failure.php');
}
?>