<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./login.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    

<form class="box" action="login_authenticate.php" method= "POST" onsubmit="return validate()">
<img src="assets/avatar.png" class="avatar">
<h1>HELLO! 
<?php

$dat = new DateTime('now', new DateTimeZone('Canada/Eastern'));
$date=$dat->format('H');
if($date < 12) 
  echo "Good morning login to continue"; 
else if($date < 17) 
  echo "Good afternoon login to continue";
else if($date<20)
  echo "Good evening login to continue"; 
else 
  echo "Good evening login to continue"; 

?>
</h1>
<p>User Name</p>
<input type="text" name="username" placeholder="Enter UserName" id="username">
<p>Password</p>
<input type="password" name="password" placeholder="Enter Password" id="password">
<input type="submit" name="" value="Login">

<a href="signup.php" >New user? Click to register</a>
<p class="error" id="error"></p>

</form>


    <!-- <script src="./login.js"></script> -->



</body>
</html>