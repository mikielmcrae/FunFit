<!-- This accesses the Page table of the database.
it works to display page name and descriptions on the homepage when included in the body,
but I'm having trouble sorting out the individual anchor links and styling in the time I have left,
so I'm leaving it here but will hard code the values on the homepage for anchoring/functionality purposes-->

<?php
	include("connect.php");

//Read the info from Page table in funfit DB
	$query = "SELECT page_name, Description FROM Page;";

	$result = mysqli_query($conn, $query);

	if(!$result) {
echo("failure to connect to database.");
	}


	
//This echoes the read values from the Page table onto the homemage (not in use for styling/anchor purposes)
// 	mysqli_fetch_array() lets us access specific values from the given row
	while($row = mysqli_fetch_array($result)) {
// 		formatting info from the Class table
		echo("<li>");
// 		utilising classes for consistent styling
		echo("<a class='site-link' id='contact'>");
		echo("<h4'>{$row['page_name']}</h4>");
		echo("<p class='further-info'>{$row['Description']}</p>");
		echo("</a>");
		echo("</li>");
		
	}

?>
