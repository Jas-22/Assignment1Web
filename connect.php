<h2>Customer Details</h2>

<table class="orders">

<?php
include('includes/db_connection.php');
$customer_name = $_POST['customer_name'];  
$Phone_number = $_POST['Phone_number'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];  
$c_password=$_POST['c_password'];
$var = NULL;  
 // preparing query

 $sql = "insert into info(customer_name, Phone_number, address, email, picture, password, confirm_password) 
 VALUES ( '$customer_name', '$Phone_number', '$address', '$email', '$var','$password', '$c_password')";
 // to prevent sql injection
 if ($db->query($sql) === TRUE) {
echo"login successfull";

 }
 
  else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

            $query = "select * from `info`";

            $result =  $db->query($query);

            while ($row = $result->fetch_assoc())

            {

              $Name = $row['customer_name'];

              $Phone_number = $row['Phone_number'];

              $Address = $row['address'];

              $Email = $row['email'];


            }

         
                
?>