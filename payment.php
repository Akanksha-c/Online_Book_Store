<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
   include 'connection.php';
?>
<html>
    <head>
        <title>PAYMENT</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css1/index.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #con{
                margin-top: 100px;
                width:500px;
                margin-bottom:5px;
            }
            #a{
                margin-bottom: 10px;
                margin-top: 10px;
            }
             #conn{
                margin-top:10px;
            }
            #size{
                margin-top:30px;
                width: 500px;
                margin-bottom: 122px;
            }
            #m
            {
                margin-left:5px;
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
        
        <div class="container" id="con">
            <form method="POST" action="payment1.php">
              <div>
            <h4>Check The Availability at your Location:</h4>
            <input id="a" type="text" placeholder="Pin Code" class="form-control" name="name" 
                                       pattern="[0-9]{6,6}" title="Should contain 6 digits! Invalid Pin Code!">
              </div>
            <button type="submit" name="submit" class="btn btn-primary">GO</button>
            
           <?php
                if(isset($_SESSION["pin"])){ 
                    
                if($_SESSION["pin"]===0){ ?>
                    
                <div id="a" class="alert alert-warning">
                <strong>Sorry!</strong> Delivery not Available at your Location.
                </div>
       
                    
               <?php }    
            
                else if($_SESSION["pin"]===1) { ?>
            
                <div class="alert alert-success" id="a">
                Deliveries Available at your Location!.
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
          </form>
        </div> 
        
        <div id="conn">
        <div class="panel panel-body text-warning">
            <center>
                 <div class="container" id="size">
                     <div class="row">
                         <div class="panel panel-primary">
                             <div class="panel-heading">BILLING ADDRESS</div>
                             <div class="panel-body">
                                 <form method="POST" action="payment2.php">
                                     <div class="form-group">
                                         
                                     <input type="text" placeholder="Name" class="form-control" name="name" 
                                            pattern="[a-zA-Z ']{1,30}">
                                     </div>
                                     
                                      
                                     
                            <div class="form-group">
                                <input type="text" placeholder="Contact" name="contact" class="form-control"
                                       pattern="[0-9-]{10,12}">
                            </div>
                                     <div class="form-group">
                                        <?php if(isset($_SESSION["code"])) {
                                            $pc=$_SESSION["code"];
                                            
                                        } ?>
                                        <input type="text" class="form-control" name="pincode" placeholder="pincode" pattern="[0-9]{6,6}" 
                                                value="<?php echo($pc); ?>"> 
                                       
                                     </div>
                                     <div class="form-group">
                                <input type="text" placeholder="Address" name="address" class="form-control"
                                       pattern="[a-zA-Z0-9 ,-']{1,70}">
                            </div>
                                      
                             <div class="form-group">
                                <input type="text" placeholder="City" name="city" class="form-control"
                                       pattern="[a-zA-Z]{1,32}">
                            </div>
                                     <div class="form-group">
                                <input type="text" placeholder="State" name="state" class="form-control"
                                       pattern="[a-zA-Z]{1,30}">
                                     </div>
                                
                                 
                                     <button type="submit" name="payment" class="btn btn-primary">Proceed to pay</button>
                                 </form>
                         </div>
                             <div class="panel-footer">
                                 <label>
        <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
       
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

<?php } } ?>



