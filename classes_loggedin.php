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
<body>
	<?php 
		include("php_action/connect.php");
	include("header_loggedin.php");
	?>
 
  <main>
    <nav class ="buttons">
      <ul>
        <li><a href="logout.php"><button class="btn">Log out</button></a></li>
      
      </ul>
    </nav>
    <div id="about-container">
      <article id="about">
        <h3>You're one step closer to achieving your fitness goals.</h3>
        <p>Looking to take it easy in Yoga, break personal records in Bodybuilding, or go at your own pace in Cardio Masters?</p>
        <p>Whatever you’re after, FunFit has got you covered. Select a class below to learn more.
        </p>
      </p>
    </div>
    <span id="link-container">
		
<!-- 	anchor links which lead to different class_details page depending on ID	 -->
		<ul class="links">
        <li>
          <a href="class_details.php?id=1" class="site-link" id="classes">
            <p>Yoga</p>
            <p class="further-info">Find your balance in Classic Yoga,<br>or sweat 'til you drop in Hot Yoga! <br></p>
    
          </a>
        </li>
        <li>
          <a href="class_details.php?id=2" class="site-link" id="testimonials">
            <p>Cardio Masters</p>
            <p class="further-info">Let's get those heart rates up!</p>
    
          </a>
        </li>
        <li>
          <a href="class_details.php?id=3" class="site-link" id="contact">
            <p>Bodybuilding</p>
            <p class="further-info">Achieve your dream physique.</p>
    
          </a>
        </li>
        <li>
          <a href="class_details.php?id=4" class="site-link" id="contact">
            <p>Resistance Training</p>
            <p class="further-info">Get your muscles pumping!</p>
    
          </a>
        </li>
      </ul>
		
     
    </span>

  
  </main>
</body>
</html>