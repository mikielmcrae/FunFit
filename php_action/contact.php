<?php 
//UPDATE: add user's contact message to the database of messages
include("connect.php");

//form in contact_us.php is post
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['query'];

//insert the following into the Contact table
$sql  = "INSERT INTO Contact(Name, Email, Message) VALUES('".$name."', '".$email."', '".$message."');";

//results are visible in SQL: SELECT * FROM Contact;
if($name && $email && $message) {
	//indicate basic success to user
	$result = mysqli_query($conn, $sql);
	echo("Query submitted!");
	header("Location: https://sewa-part--tzlmp.run-eu-central1.goorm.io/SEWA3_PART_2/success.php");
}
	
else {
echo("Please fill all required fields");
}




?>