<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./signup.css" rel="stylesheet">
    <title>Signup</title>
</head>
<body>
    

<form class="box" action="login.html" onsubmit="return validate()">
<img src="assets/avatar.png" class="avatar">
<h1>HELLO! 

<?php

$dat = new DateTime('now', new DateTimeZone('Canada/Eastern'));
$date=$dat->format('H');
if($date < 12) 
  echo "Good morning signup to continue"; 
else if($date < 17) 
  echo "Good afternoon signup to continue";
else if($date<20)
  echo "Good evening signup to continue"; 
else 
  echo "Good evening signup to continue"; 

?>
</h1>
<p>First Name</p>
<input type="text" name="" placeholder="Enter  first Name" id="fname">
<p>Last Name</p>
<input type="text" name="" placeholder="Enter Last Name" id="lname">
<p>Contact Number</p>
<input type="text" name="" placeholder="Enter  Contact" id="=Contact">
<p>Email</p>
<input type="text" name="" placeholder="Enter Last Name" id="lname">

<p>Password</p>
<input type="password" name="" placeholder="Enter Password" id="password">


<p>Confirm Password</p>
<input type="password" name="" placeholder="Enter Password" id="password">
<input type="submit" name="" value="Signup">
<a href="login.php" >Existing user?Click to login</a>
<p class="error" id="error"></p>

</form>


    <script src="./login.js"></script>



</body>
</html>