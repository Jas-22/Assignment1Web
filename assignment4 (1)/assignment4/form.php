<!DOCTYPE html>
<html lang="en">
<head>
        <title>shop </title>
        <meta charset="UTF=8">
        <meta name="viewport"content = "initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
 <body class="body2">
 <div class="navbar">
        
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shopping</a></li>
           </ul>
      </nav>
      <img src="images/cart.png" class="cart">
</div>

<div class= "content3">

 <form name="myform" method="POST" onsubmit="return formSubmit();" action="form.php">

        <label for="name">User Name</label>&emsp;&emsp;
        <input id="name" placeholder="Username" type="text" name="name">
        <br><br>

        <label>Phone Number</label>&emsp;
        <input id="phonenumber" placeholder="(123) 456 7890" type="phone" name="phonenumber">
        <br><br>

        <label>Email</label>&emsp;&emsp;&emsp;&emsp;
        <input id="email" placeholder="email@domain.com" type="email" name="email">
        <br><br>

        <label>Post Code</label>&emsp;&emsp;&nbsp;
        <input id="postcode" placeholder="XXX XXX" type="postcode" name="postcode">
        <br><br>
          
        <label for="address">Address</label>&emsp;&emsp;&emsp;
        <input id="address" placeholder="address" type="text" name="address">
        <br><br>
       

        <label>City</label>&emsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp;&nbsp;
        <select name="city" id="city" >
          <option value="">Select you city</option>
          <option value="1">Toronto</option>
          <option value="2">Waterloo</option>
          <option value="3">Brampton</option>
        </select><br><br>

        <label>Province</label>&emsp;&emsp;&nbsp;&nbsp;
        <select name="province" id="province">
          <option value="">Select Province</option>
          <option value="province1">Ontario</option>
          <option value="province2">Ottawa</option>
          <option value="province3">Foundland</option>
        </select>
        <br><br>
        <label>Card Number</label>&emsp;
        <input id="cardnumber" placeholder="XXXX XXXX XXXX XXXX" type="cardnumber" name="cardnumber">
        <br><br>

        <label>ExpiryDate</label>&emsp;&emsp;&emsp;&emsp;
        <input type="date" id="expirydate"  name="phonenumber">

    

        <br><br>

        <input type="submit" class="btn" value="Submit" name="submit">
        <p id="errors">

          <?php
            // server-side validations 
            if(isset($_POST['submit']))
            { 
              $errors = ''; 
              //name
              $name = $_POST['name']; 
              if($name == '') 
              {
                $errors = 1; 
                echo"<script>
                alert('Please enter name');
                window.location.href='form.php';
                </script><br>"; 
              }
              
              //phonenumber
              $phonenumber = $_POST['phonenumber']; 
             
              $phonePattern = "/^[0-9]{3}\-[0-9]{3}\-[0-9]{4}$/";
              if(!preg_match($phonePattern, $phonenumber))
              {
                $errors = 1; 
                echo"<script>
                alert('Please enter phonenumber in correct format');
                window.location.href='form.php';
                </script><br>"; 
              }

              //email

              $email = $_POST['email']; 
             
              $emailPattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
              if(!preg_match($emailPattern, $email))
              {
                $errors = 1; 
                echo"<script>
                alert('Please enter email in correct format');
                window.location.href='form.php';
                </script><br>";
              }
              //address
              
              $address = $_POST['address']; 
              if($address == '') 
              {
                $errors = 1; 
                echo"<script>
                alert('Please enter address');
                window.location.href='form.php';
                </script><br>";
              }
  
            //city
              $city = $_POST['city']; 
              if($city == '') 
              {
                $errors = 1; 
                echo"<script>
                alert('Please enter your city');
                window.location.href='form.php';
                </script><br>"; 
              }
               //province
              $province = $_POST['province']; 
              if($province == '') 
              {
                $errors = 1; 
                echo"<script>
                alert('Please enter province');
                window.location.href='form.php';
                </script><br>"; 
              }
            //card number
              $cardnumber = $_POST['cardnumber']; 
             
              $cardPattern = "/^[0-9]{4}\-[0-9]{4}\-[0-9]{4}$/";
              if(!preg_match($cardPattern, $cardnumber))
              {
                $errors = 1; 
               
                echo"<script>
                alert('Please enter cardnumber in correct format');
                window.location.href='form.php';
                </script><br>";
                
              }
             

            } 
          ?>

        </p>
      </form>
         </div>
 </body>
    </html>