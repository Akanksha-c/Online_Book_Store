<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
  include 'connection.php';
  if(isset($_SESSION['uid']))
  {
      $userid = $_SESSION['uid'];
  }
  else
  {
      header("Location: products.php");
   }
?>

<html>
    <head>
        <title>CART</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css1/index.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table{
                margin-top: 80px;
            }
            footer{
                margin-top:417px;
            }
            #c
            {
                margin-left: 50px;
                margin-top: 80px;
            }
        </style>
    </head>
    <body>
    <div class="navbar navbar-inverse navbar-fixed-top">  
    <div class="container">     
        <div class="navbar-header">   
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">  
                <span class="icon-bar"></span>        
                <span class="icon-bar"></span>      
                <span class="icon-bar"></span>      
            </button>           
            <a class="navbar-brand" href="index.php">Book Store</a>      
        </div>   
        <div class="collapse navbar-collapse" id="myNavbar">     
            <ul class="nav navbar-nav navbar-right">                       
                <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>  
                <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>   
                <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>        
            </ul>      
        </div>   
    </div>
    </div>
    <?php
        $sum=0;
        $num=0;
    ?>        
    <?php
          $query="select i.item_id,p.item_name,p.price from user_items i,user_products p where i.uid=$userid and
                    i.item_id=p.item_id";
          $res=mysqli_query($con, $query);
          $total_rows=mysqli_num_rows($res);
          if($total_rows==0)
          {?>
        <div id="c">
            <h3 style="color:red">Your Cart Is Empty!</h3>
        </div>
             
             
          <?php   exit();
          }
          else
          { ?>
        
        
        <div class="container">
        <table class="table table-striped">
            <tbody>
                <tr><th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th><th></th></tr>
                
                <?php        
                while($row=mysqli_fetch_array($res))
                { 
                          $num=$num+1;   
                          $id = $row['item_id']; ?>
                <tr><td><?php echo $num; ?></td>
                    <td><?php echo $row['item_name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo "<a href=cart-remove.php?id=$id>Remove</a>" ?></td>
                </tr>
                <?php  
                       $sum=$sum+$row['price'];
                       $_SESSION['sum']=$sum;
                }
              }?>
                
                
                <tr><td> </td><td>Total</td><td>Rs.<?php echo $sum ?></td>
                    <td><a href="payment.php" class="btn btn-primary" role="button">Confirm Order</a></td></tr>
                
            </tbody>
        </table>
            </div>    
            
        <footer>
            <div class="container">
                <center>
                    <p>Copyright © Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000</p>
                </center>
            </div>
        </footer>
    </body>
</html>




