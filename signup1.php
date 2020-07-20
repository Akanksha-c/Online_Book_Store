

<?php
   
   if(isset($_SESSION['uid']))
   {
       echo "hello";
   }
   else
   {
       echo "new user";
   }
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>SIGN UP</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css1/index.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #con{
                margin-top:100px;
                width:600px;
                margin-bottom:85px;
            }
        </style>
    </head>
    <body>
       <?php
          include 'header.php';
        ?>
       
        <div class="container" id="con">
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">SIGN UP</div>
                    <div class="panel-body">
                        <form method="post" action="signup.php">
                        
                            <div class="form-group">
                                <input type="text" placeholder="Name" class="form-control" name="name" 
                                       pattern="[a-zA-Z ']{1,30}">
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control" name="email"
                                       pattern="[a-z0-9._+-]+@[a-z0-9]+\.[a-z]{2,3}$">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password"
                                       pattern=".{6,}" title="Should contain minimum of 6 characters">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Contact" name="contact" class="form-control"
                                       pattern="[0-9-]{10,12}">
                            </div>
                             <div class="form-group">
                                <input type="text" placeholder="City" name="city" class="form-control"
                                       pattern="[a-zA-Z]{1,32}">
                            </div>
                             <div class="form-group">
                                <input type="text" placeholder="Address" name="address" class="form-control"
                                       pattern="[a-zA-Z0-9 ,-']{1,70}">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
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

