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
    

<form class="box" action="connect.php " onsubmit="return validate()" method = "POST">
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
<input type="text" name="customer_name"  required placeholder="Enter first Name" name="customer_name" >
<p>Phone number</p>
<input type="text" name="Phone_number"  required placeholder="Enter phone number" name="Phone_number">
<p>Address</p>
<input type="text" name="address" required placeholder="Enter address" name="=address">
<p>Email</p>
<input type="text" name="email"  required placeholder="Enter email" name="email">

<p>Password</p>
<input type="password" name="password"  required placeholder="Enter Password" name="password">


<p>Confirm Password</p>
<input type="password" name="c_password" placeholder="Enter Password" name="c_password">
<input type="submit" name="signup_b" value="Signup">
<a href="login.php" >Existing user? Click to login</a>
<p class="error" id="error"></p>

</form>


    <script src="./login.js"></script>


    <p id="errors">

<?php
  // server-side validations 
  if(isset($_POST['submit']))
  { 
    $errors = ''; 

     //Customername
     $Name = $_POST['customer_name']; 
     if($Name == '') 
     {
       $errors = 1; 
       echo"<script>
       alert('Please enter your name');
       window.location.href='signup.php';
       </script><br>"; 
     }
    
      //Phone number
      $Phone_number = $_POST['Phone_number']; 
      if($Phone_number == '') 
      {
        $errors = 1; 
        echo"<script>
        alert('Please enter Phone_number');
        window.location.href='signup.php';
        </script><br>"; 
      }


    //email

    $Email = $_POST['email']; 
   
    $emailPattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    if(!preg_match($emailPattern, $Email))
    {
      $errors = 1; 
      echo"<script>
      alert('Please enter email in correct format');
      window.location.href='signup.php';
      </script><br>";
    }
    //address
    
    $Address = $_POST['address']; 
    if($Address == '') 
    {
      $errors = 1; 
      echo"<script>
      alert('Please enter address');
      window.location.href='signup.php';
      </script><br>";
    }


  } 
?>

</p>
</body>
</html>