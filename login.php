
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
  <main>

    <div class="form-container">
        <!-- Allow users to log in -->
      <form method="post" action="php_action/process.php">
        <p>Email address: <input name="email" type="email" size="40" maxlength="50"></p>
        <p>Password: <input name="password" type="text" size="20" maxlength="30"></p>
       	<button type="submit" class='btn'>
			Log in
		  </button>
      </form>
    </div>

  
  </main>
</body>
</html>