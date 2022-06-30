<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include("php_action/connect.php");
    include("header_loggedin.php");?>
    
<!-- rudimentary failure page just to indicate to user that their action was not successful	 -->
    <article class="about">
        <h3>Failure</h3>
        <a href="index.php"><button type="submit" class="btn">Back to Home</button></a>
    </article>
</body>
</html>