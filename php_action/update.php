<?php 
include("connect.php");


$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$mtype = $_POST['membershiptype'];
$password = $_POST['password'];
$password2 = $_POST['password2'];


//Updating the User table with input values
//success can be observed in SQL using SELECT * FROM User; and new users will appear
//still requires validation and password hiding
$sql  = "INSERT INTO User(FirstName, LastName, MembershipType, Email, Pass) VALUES('".$fname."', '".$lname."', '".$mtype."', '".$email."', '".$password."');";
	
if($fname && $lname && $email && $mtype && $password && $password2 && ($password == $password2)) {
	$result = mysqli_query($conn, $sql);

	
}
	
if($result) {
	header("Location: https://sewa-part--tzlmp.run-eu-central1.goorm.io/SEWA3_PART_2/success.php");
}
else {
	header("Location: https://sewa-part--tzlmp.run-eu-central1.goorm.io/SEWA3_PART_2/failure.php");
echo("Please fill all required fields");
}




?>