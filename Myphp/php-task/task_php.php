
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task_php</title>
   
</head>
<body>
<form method="post" name="myemailform" action="mail_pass.php">

    <p>Enter email:</p>
    	<input type="text" name="email">
    <br>
    
    <p>Enter password:	</p>
    <input type="password" name="password">
    
    <input type="submit" value="Send Form">
    </form>

</body>

</html>

<?php
$cookie_name="jameel ";
if(!isset($_COOKIE[$cookie_name])) {
    echo "<br><br>Cookie named '" . $cookie_name . "' is not set!";
  } else {
    echo "<br><br>Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
    echo "<br>".  $end_time;

  }
?>