<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(ISSET($_POST['addtocart1']))
    {
       if(isset($_SESSION['cart']))
         {
            $myitems=array_column($_SESSION['cart'],'itemname');
            if(in_array($_POST['itemname'],$myitems))
            {
                echo"<script>
                alert('Item already added');
                window.location.href='shop.php';
                </script>";
            }
            else{
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('itemname'=>$_POST['itemname'],'price'=>$_POST['price'],'quantity'=>1);
                echo"<script>
                alert('Item Added to Cart');
                window.location.href='shop.php';
                </script>";
            }
   
           }
           else
       {
              $_SESSION['cart'][0]=array('itemname'=>$_POST['itemname'],'price'=>$_POST['price'],'quantity'=>1);
              echo"<script>
              alert('Item Added to Cart');
                window.location.href='shop.php';
                  </script>";
        }
    }
}


?>