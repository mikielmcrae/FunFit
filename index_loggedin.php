<!DOCTYPE html>
<!--Homepage  -->
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
	
		include("php_action/connect.php");
	include("header_loggedin.php");
	include("php_action/process.php");
	
	
  
	?>
  <main>
    <nav class ="buttons">
    <!-- might need to echo the ul in PHP -->
      <ul>
  
		  <?php
		  
		 	echo("<h1>Welcome, {$_SESSION['FirstName']}!</h1>");
		  //should be more secure, should be the email or admin ID but couldn't get those to work
		  if($_SESSION['FirstName'] == 'Administrator') {
			  echo("<li><a href='view_users.php'><button class='btn'>View users</button></a></li>");
		  }
		  ?>
		  <li><a href='logout.php'><button class="btn">Log out</button></a></li>
      </ul>
    </nav>
    <div id="about-container">
      <article id="about">
        <h3>This is where the fun begins.</h3>
        <p>Since its 2022 inception, FunFit has aimed to provide fitness, the FUN kind, to all who walk through our doors.</p>
        <p>Whether you're a student checking couch cushions for spare change, a single parent just looking to balance the basics, or a longtime fitness fanatic in search of new challenges, FunFit has a plan with YOUR needs in mind!</p>
      </p>
    </div>
    <div id="link-container">
      <ul class="links">
<!-- 	Including pages.php here fills the Page links with their names and descriptions
but hardcoding the values for anchoring purposes--> 
        <li>
<!-- 		Other site links	 -->
          <a href="classes_loggedin.php" class="site-link" id="classes">
			
            <h4>Classes</h4>
			
            <p class="further-info">No commitment, no hassle! <br>See which classes work <br>for your schedule.</p>
    
          </a>
        </li>
        <li>
          <a href="testimonial.php" class="site-link" id="testimonials">
            
            <h4>Testimonials</h4>
            <p class="further-info">Not sure? See what our loyal <br> members love most about FunFit.</p>
    
          </a>
        </li>
        <li>
          <a href="contact_us.php" class="site-link" id="contact">
            <h4>Contact us</h4>
            <p class="further-info">Get in touch. <br>We'd love to hear from you.</p>
    
          </a>
        </li>
        <li>
          <a href="#" class="site-link" id="events">
            <h4>Events</h4>
            <p class="further-info">See what our loyal members are up <br>to when they're not working up <br>a sweat at FunFit!</p>
    
          </a>
        </li>
      </ul>
    </div>
  </main>
</body>
</html>