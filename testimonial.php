<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>
<body>
	<?php include("php_action/connect.php");
	include("header.php");
	?>

<!-- 	allow users to read testimonials -->
  <main>
    <div id="about-container">
        <article id="about">
          <h3>Still not sold?</h3>
          <p>Read what others are saying!</p>
        </p>
<!-- 	Button leading to testimonial submission page	 -->
		
		<a href="testimonial_add.php"><button type="submit" class="btn">
			Post Testimonial
		</button></a>
      </div>
    
	  
<!-- 	Again, hardcoded in though these would normally be read from testimonial table and echoed in   -->
      <ul class="testimonial-container">
        <a id="t1" href="#" class="testimonial"><p class="further-info">FunFit has saved my mental health as well as my physical health. My immediate family is not super into health and fitness but I decided to change my habits this year and FunFit has helped me stay on track every step of the way. I especially love the opportunity to build a community of likeminded people. My only request is that we bring bake the monthly healthy bake sales!<br><cite>Jim Johnson, 58</cite></p></a>
        <a id="t2" href="#" class="testimonial"><p class="further-info">It’s great they have a lot of branches conveniently located throughout the city so you can always find a FunFit nearby wherever you are. Plus the gyms are quite large and spacious so even in busy hours you never feel crowded out by other members<br><cite>Ben McKay, 28</cite></p></a>
        <a id="t3" href="#" class="testimonial"><p class="further-info">I cannot recommend Blake’s Butt Busting Bootcamp enough! My glutes are screaming but my heart thanks you for the challenge Blake!!!<br><cite>Amy Sheridan, 37</cite></p></a>
        <a id="t4" href="#" class="testimonial"><p class="further-info">I’ve honestly only just taken interest in going to the gym these past few months but FunFit is worth every penny. I’m a student so I really appreciate that they offer tiered memberships and the perks for students are still pretty good. I didn’t get the red carpet rolled out for me on my first day or anything but the staff are plenty helpful if you ask for something.<br><cite>Lewis Chatham, 19</cite></p></a>
        <a id="t5" href="#" class="testimonial"><p class="further-info">great stuff been going here for years only qualm is it wouldn’t kill them to update the music playlists for some of the workout classes, gets old hearing the same songs week in week out<br><cite>Declan Rice, 39</cite></p></a>
    
      </ul>
    
 
  
  </main>
</body>
</html>