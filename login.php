<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css1/index.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #con{
                margin-top:80px;
            }
            #size{
                margin-top:30px;
                width: 500px;
                margin-bottom: 122px;
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
                <li><a href="signup1.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>                   
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>            
            </ul>      
        </div>   
    </div>
</div>
        
        <div id="con">
        <div class="panel panel-body text-warning">
            <center>
                 <h3>Login to make a purchase.!!</h3>
                 <div class="container" id="size">
                     <div class="row">
                         <div class="panel panel-primary">
                             <div class="panel-heading">LOGIN</div>
                             <div class="panel-body">
                                 <form method="POST" action="login_submit.php">
                                     <div class="form-group">
                                         <input type="email" class="form-control" placeholder="Email" name="email"
                                                pattern="[a-z0-9._+-]+@[a-z0-9]+\.[a-z]{2,3}$">
                                     </div>
                                     <div class="form-group">
                                         <input type="password" class="form-control" placeholder="Password" name="password"
                                                pattern=".{6,}">
                                     </div>
                                     <button type="submit" name="login" class="btn btn-primary">Login</button>
                                 </form>
                         </div>
                             <div class="panel-footer">
                                 <p>Don't have an account?<a href="signup1.php"> Register</a></p>
                             </div>
                     </div>
                 </div>
                 </div>
            </center>
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

