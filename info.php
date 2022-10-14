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
    <link rel="stylesheet" type="text/css" href="info.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <title>Customer Info</title>
</head>
<body>
  <header>
    <nav class="top_menu">
      <ul>
        <li>
          <a href="login.php">login</a>
        </li>
        <li>
          <a href="account.php">Accounts</a>
        </li>
        <li>
          <a href="info.php">Customer Info</a>
        </li>
        <li>
          <a href="interact.php">interact</a>
        </li>
        <li>
          <a href=" ">Logout</a>
        </li>
      </ul>
    </nav>
  </header>
 
<div class="myform">
  <div class="container">
    <div class="image">
      <br/>
      <img src="assets/pic1.jpg" alt="">
    </div>
    <div class="text">
      <h2>Customer Details</h2>
    <table class="orders">
    <?php
                $query = "select * from `info`";
                $result =  $db->query($query);
                while ($row = $result->fetch_assoc()) 
                {
                  $Name = $row['customer_name'];
                  $Phone_number = $row['Phone_number'];
                 $Address = $row['address'];
                  $Email = $row['email'];
                  $picture = $row['picture'];
                 
             }
                ?>
           
                <tr>
                   
                    <th>Name</th>
                    <td><?php echo $Name ?></td>
                </tr>
                <tr>

                    <th>Phone</th>
                    <td><?php echo $Phone_number ?></td>
                </tr> 
                <tr>
                &ensp;  &ensp;  <th>Address</th>
                    <td><?php echo $Address ?></td>
               </tr>
               <tr>
               <th>Email</th>
               <td><?php echo $Email ?></td>
               </tr>

                 
                  
                </tr>
         
                </table>
            </div>

  </div>
 </div>
</body>
</html>