<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
   include 'connection.php';
   if(!isset($_SESSION['uid']))
   {
       header("Location: index.php");
   }
 else { ?>
 

<html>
    <head>
        <title>SUCCESS</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css1/index.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #con{
                margin-top: 100px;
                
                margin-bottom:433px;
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
           $uid=$_SESSION['uid'];
           $query="Delete from user_items where uid=$uid";
           $res=mysqli_query($con,$query);
        ?>
        
        <div class="container" id="con">
            <h3> Your order is confirmed. Thank you for shopping with us.<br><br> Your Books will be delivered within 3-4 working days. <br><br>
                <a href="products.php">Click here</a> to purchase any other item.</h3>
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

<?php } ?> 