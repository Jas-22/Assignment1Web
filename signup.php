<?php

session_start();

include('includes/db_connection.php');

?>

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
    

<form class="box" action="connect.php" onsubmit="return validate()" method = "POST">
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
<p> Name</p>
<input type="text" name="customer_name" required placeholder="Enter first Name" id="customer_name" >
<p>Phone number</p>
<input type="tel" name="Phone_number" required placeholder="Enter phone number" id="Phone_number">
<p>Address</p>
<input type="text" name="address" required placeholder="Enter address" id="=address">
<p>Email</p>
<input type="email" name="email" required placeholder="Enter email" id="email">

<p>Password</p>
<input type="password" name="password" required placeholder="Enter Password" id="password">


<p>Confirm Password</p>
<input type="password" name="c_password" required placeholder="Enter Password" id="c_password">
<input type="submit" name="signup_b" value="Signup">
<a href="login.php" >Existing user? Click to login</a>
<p class="error" id="error"></p>

</form>


    <script src="./login.js"></script>



</body>
</html>