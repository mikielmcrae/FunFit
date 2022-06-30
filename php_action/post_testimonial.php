<?php 

include("connect.php");


//using GET to update the Testimonial table with user-input values
if($_GET) {
	$name = $_GET['name'];
$class = $_GET['class'];
$email = $_GET['email'];
$testimonial = $_GET['query'];

	$sql  = "INSERT INTO Testimonial(Test, Class) VALUES('".$testimonial."', '".$class."');";
	//Having trouble displaying the results on the testimonials page, but confirmation of INSERT statement success
	//can be observed in SQL using SELECT * FROM Testimonial; (new submissions will appear here)
	//echo($sql);
if($name && $class && $email && $testimonial) {
	$result = mysqli_query($conn, $sql);
	//indicate basic success to user
	if($result) {
		header("Location: https://sewa-part--tzlmp.run-eu-central1.goorm.io/SEWA3_PART_2/success.php");
	}

}
	
else {
echo("Please fill all required fields");
}
}

//GET failure
else{
echo("Failure");
}




?>