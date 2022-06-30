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
	include("header.php");?>
  <main>
	 
    <div id="about-container">
        <article id="about">
          <h3>Something to say?</h3>
          <p>We can help with that.</p>
          <p>Fill out the contact form below and FunFit will be in touch within 24 hours.</p>
        </p>
      </div>
	  
<!-- 	User submission form to be passed to contact.php to update the Contact table   -->
    <div class="form-container">
      <form method="post" action="php_action/contact.php">
        <p>Name: <input name="name" type="text" size="20" maxlength="30"></p>
        <p>Email address: <input name="email" type="email" size="40" maxlength="50"></p>
        <p>Your query: <textarea name="query"></textarea></p>
        <button type="submit" class='btn'>Submit</button>
       
      </form>
    </div>

  
  </main>
</body>
</html>