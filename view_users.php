<!DOCTYPE html>
<!-- display classes -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>
<?php 
	
include("php_action/connect.php");
include("header_loggedin.php");
	include("php_action/process.php");
	
?>
<!-- //if ($_SESSION['Email'] == 'admin@admin.com') {
// 	 -->
<div>
	<table>
		<thead>
			<tr>
			
					<th>Name</th>
					<th>Email</th>
					<th>Membership Type</th>
					<th>Action</th>
			
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM User;";
			$result = mysqli_query($conn, $sql);

			
			
				if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					
						echo "<tr>
						<td>".$row['FirstName']." ".$row['LastName']."</td>
						<td>".$row['Email']."</td>
						<td>".$row['MembershipType']."</td>
						<td>
						
							<a href='php_action/remove_user.php?id=".$row['UserID']."'><button type='button'>Remove</button></a>
						</td>
					</tr>";
			
				}
				}
			
			
			
			//Wanted to only show the table if the admin is logged in, bt having trouble keeping sessions going
			//at times, and to avoid total failure just commenting this out and making table visible no matter what
			
			// if(!($_SESSION['Email'] == 'admin@admin.com')) {
			// 	echo("Forbidden!");
			// 	echo("<a href='index.php'><button type='submit' class='btn'>Take me home</button></a>");
			// }
			
			
			// else {
			// 	if($result->num_rows > 0) {
			// 	while($row = $result->fetch_assoc()) {
					
			// 			echo "<tr>
			// 			<td>".$row['FirstName']." ".$row['LastName']."</td>
			// 			<td>".$row['Email']."</td>
			// 			<td>".$row['MembershipType']."</td>
			// 			<td>
			// 			<a href='edit_user.php?id=".$row['UserID']."'><button type='button'>Edit</button></a>
		
			// 				<a href='remove.php?id=".$row['UserID']."'><button type='button'>Remove</button></a>
			// 			</td>
			// 		</tr>";
					
					
			// 	}
				
			// } 
			// }
			
			?>
		</tbody>
	</table>
</div>
