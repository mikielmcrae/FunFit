<!DOCTYPE html>
<!-- Testimonial submission page -->
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
	
	include("header.php");
	?>
  <main>
    <div id="about-container">
        <article id="about">
          <h3>Submit one of your own!</h3>
          <p>Have a favourite class? Really got on with your instructor? Just want to share your love for FunFit?</p>
          <p>Fill out the testimonial form below and check back soon to see it posted!</p>
        </p>
      </div>
    <div class="form-container">
<!-- 	Testimonial submission form updates Testimonial table in funfit DB -->
      <form method="get" action="php_action/post_testimonial.php">
        <p>Name: <input name="name" type="text" size="20" maxlength="30"></p>
        <p>Email address: <input name="email" type="email" size="40" maxlength="50"></p>
        <p>Class <input name="class" type="text" size="40" maxlength="50"></p>
        <p>Testimonial: <textarea  name="query"></textarea></p>
        <button type="submit" class="btn">Submit</button>
       
      </form>
    </div>

  
  </main>
</body>
</html>