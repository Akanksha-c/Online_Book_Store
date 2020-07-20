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
       header("Location: products.php");
   }
?>
<html>
    <head>
        <title>SETTINGS</title>
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
                width:500px;
                margin-bottom:1000px;
            }
            #c
            {
                margin-bottom: 130px;
            }
            
        </style>
    </head>
    <body>
        <?php
           include 'header.php'
        ?>
        <div class="container" id="con">
            <div class="row">
             <div class="panel panel-primary" id='c'>
                 <div class="panel-heading">Change Password</div>
                 <div class="panel-body">
                     <form method="post" action="change.php">
                     <div class="form-group">
                         <input type="password" placeholder="Old Password" class="form-control" name="opassword"
                                pattern=".{6,}" title="Should contain minimum of 6 characters">
                     </div>
                         <div class="form-group">
                         <input type="password" placeholder="New Password" class="form-control" name="npassword"
                                pattern=".{6,}" title="Should contain minimum of 6 characters">
                     </div>
                         <div class="form-group">
                         <input type="password" placeholder="Re-Type New Password" class="form-control" name="password"
                                pattern=".{6,}" title="Should contain minimum of 6 characters">
                     </div>
                         <button type="submit" name="submit" class="btn btn-primary">Change</button>
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


