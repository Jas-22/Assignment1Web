<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>shop </title>
        <meta charset="UTF=8">
        <meta name="viewport"content = "initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
<body class="body">
    <div class="navbar">
        
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shopping</a></li>
           </ul>
      </nav>
     <a href="form.php"> <img src="images/cart.png" class="cart"><a>
</div>
    
    
<div class="content1">

    <div class="dvMain">
      <div class="heading">
        <h1> Enjoy shopping with us</h1></div><br>
            <div class="cardheight cardwidth">
             
           
            <form action="managecart.php" method="POST">
                <img src="./images/R.jpg" width="150" alt="sweatshirt"><br>
                <br>
                <h2>Winter Black Coat</h2><br>
                <h4> Price:$450</h4><br>
                <button type="submit" name="addtocart1" value="Add To Cart" class="btn2">Add to cart</button>
                <input type="hidden"  name="itemname" value="Sweatshirt">
                 <input type="hidden"  name="price" value="450">
           </form> 
           </div>
            <div class="cardheight cardwidth">
            <form action="managecart.php" method="POST">
                <img src="./images/r2.jpg" width="150" alt="sweatshirt"><br>
                <br>
                <h2>Winter Pink LadiesCoat</h2><br>
                <h4> Price:$550</h4><br>
                <button type="submit"name="addtocart1" value="Add To Cart" class="btn2">Add to cart</button>
                
                  <input type="hidden"  name="itemname" value="Pink coat">
                       <input type="hidden"  name="price" value="550">
             </form>   
            </div>
            <div class="cardheight cardwidth">
            <form action="managecart.php" method="POST">
                 <img src="./images/r3.jpg" width="150" alt="coat.webp">
                 <br><br>
                   <h2>Winter Black Jacket</h2><br>
                    <h4> Price:$200</h4><br>
                   <button type="submit" name="addtocart1"value="Add To Cart" class="btn2">Add to cart</button>
                    <input type="hidden"  name="itemname" value="black jacket">
                    <input type="hidden"  name="price" value="200">
            </form>
           </div>
     </div>
</div>
<br><br><br>

    <div class="content2">
        <div class="row">
            
                <h1>My Cart</h1>
                <br><br>
                <table class="table">
  <thead class="textcenter">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Qunatity</th>
    </tr>
  </thead>
  <tbody class="textcenter">
    <?php
    $total=0;

    if(isset($_SESSION['cart']))
    {
        foreach($_SESSION['cart'] as $key=>$value)
    {
       $total=$total+$value['price'];
        echo"
        <tr>
        <td>1</td>
        <td>$value[itemname]</td>
        <td>$value[price]</td>
        <td><input class='text-center' type='number' value='$value[quantity]' min='1' max='10'>    </td>
        
        </tr>
        ";
    }
    }
    
    ?>
    
   

  </tbody>
</table>
          
 </div>
</div>
<br>
<div class="total">
            <h2> Total: <?php echo $total ?></h2>
           
            </div>
            <br><br>
      
    </body>
</html>