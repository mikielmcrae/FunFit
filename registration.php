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

<!-- registration form	-->
<!-- 	Info for membership tiers/fees: hardcoded in due to time constraints but would normally be read
from Fee table in fee.php and echoed -->
  <main>
    <span id="link-container">
      <ul class="memberships">
        <li>
          <a href="#" class="membership" id="">
            <p>Basic €19.99/mo</p>
            <p class="further-info">Keep it simple. Enjoy unlimited access to gym facilitie and three free classes per week. </p>
    
          </a>
        </li>
        <li>
          <a href="#" class="membership"  id="premium">
            <p>Premium €56.00/mo</p>
            <p class="further-info">Not for the faint of heart. Enjoy unlimited access to gym facilities, unlimited free class sign-ups, and access to personal trainers on your watch.</p>
    
          </a>
        </li>
        <li>
          <a href="#" class="membership"  id="">
            <p>Student €11.80/mo</p>
            <p class="further-info">Enjoy unlimited access to gym facilities and one free class per week. *You must provide a valid Student ID from an accredited University upon request*</p>
    
          </a>
        </li>

      </ul>
    </span>
    <div class="form-container">
<!-- 	Action updates User table
lacks validation, password hiding, checking for used email addresses-->
      <form method="post" action="php_action/update.php">
        <p>First name: <input name="firstname" type="text" id="firstname" size="20" maxlength="30"></p>
        <p>Last name: <input name="lastname" type="text" size="20" maxlength="40"></p>
        <p>Membership type: 
          <input name="membershiptype" value="Basic" type="radio">Basic
          <input name="membershiptype" value="Premium" type="radio">Premium
          <input name="membershiptype" value="Student" type="radio">Student
        </p>
        <p>Email address: <input name="email" type="email" size="40" maxlength="50"></p>
        <p>Password: <input name="password" type="text"size="20" maxlength="30"></p>
        <p>Confirm password: <input type="text" name="password2" size="20" maxlength="30"></p>
       	<button type="submit" class='btn'>Sign up</button>
      </form>
    </div>

  
  </main>
</body>
</html>