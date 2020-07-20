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
      $uid = $_SESSION['uid'];
    }
?>
<html>
    <head>
        <title>CHECKOUT</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        
        <link href="css1/index.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            
            #con{
                margin-top: 80px;
                width:500px;
                margin-left: 400px;
                margin-bottom:10px;
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
                margin-bottom: 5px;
            }
            #m
            {
               
                margin-left:400px;
            }
            #n
            {
                 width:500px;
                 margin-left:10px;
            }
            #add{
                margin-left:425px;
                width:500px;
            }
            #f
            {
                margin-top: 160px;
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
        <div class="panel panel-body text-warning">
            <center>
                 <div class="container" id="size">
                     <div class="row">
                         <div class="panel panel-primary">
                             <div class="panel-heading">PAYMENT OPTION:</div>
                             <div class="panel-body">
        <form action="#" method="POST">
        <div class="alert alert-success" id="a">
            <?php if(isset($_SESSION["sum"])) {
                    $sum=$_SESSION["sum"];
                                            
            } ?>
            <strong>Amount to be paid is Rs.<?php echo $sum ?></strong> </div>
        <div class="radio">
            <label><input type="radio" name="pay" value="first">CASH ON DELIVERY</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="pay" value="second">CARD</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="pay" value="third">GOOGLE PAY</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">OK</button>
        </form>
                             </div>
                         </div>
                     </div>
                 </div>
            </center>
        </div>
        </div>
        
        <?php
        if (isset($_POST['submit'])) {
        if(!isset($_POST['pay']))
        { ?>
          <div id="add" class="alert alert-warning">
          <strong>Please select a payment Option!</strong>
          </div>
        <?php }
        else if($_POST['pay']== "first")
        { 
             $query2= "update ship set payment_option='cash' where uid=$uid";
             $execute_query=  mysqli_query($con, $query2)  ;?>
             <script> location.replace("success.php"); </script>
        <?php
        }
        else if($_POST['pay']=="second")
        {
            $query1="update ship set payment_option='card' where uid=$uid";
            $execute_query=  mysqli_query($con, $query1);
        ?>
        
        <div class="container" id="m">
        <div class="panel panel-body text-warning">
                             <div class="container" id="n">
                     <div class="row">
                         <div class="panel panel-primary">
                             <div class="panel-heading">CARD PAYMENT:</div>
                             <div class="panel-body">
        <form action="#" method="POST">
            <div>
                <h3>Accepted Cards</h3></div>
            <div id="a" class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <div class="form-group">
            <label for="username">Full name (on the card)</label>
            <div class="input-group">
            <div class="input-group-prepend">
		<span class="input-group-text"><i class="fa fa-user"></i></span>
            </div>
            </div>
            <div>
            <input type="text" placeholder="" class="form-control" name="name" 
                   pattern="[a-zA-Z ']{1,30}" required="">
            </div> <!-- input-group.// -->
            </div>
            <div class="form-group">
                <label for="cardNumber">Card number</label>
<div class="input-group">
	<div class="input-group-prepend">
		<span class="input-group-text"><i class="fa fa-credit-card"></i></span>
	</div>
</div>
                <div>
                    <input type="text" class="form-control" name="cardNumber" placeholder="1111-2222-3333-4444"
                           required="" pattern="[0-9 -]{19,19}">
</div> <!-- input-group.// -->

            </div>
            
            <div class="row">
    <div class="col-sm-8">
        <div class="form-group">
            <label><span class="hidden-xs">Expiration</span> </label>
        	<div class="form-inline">
        		<select class="form-control" style="width:45%">
				  <option>MM</option>
				  <option>01 - January</option>
				  <option>02 - February</option>
				  <option>03 - March</option>
                                  <option>04 - April</option>
				  <option>05 - May</option>
				  <option>06 - June</option>
                                  <option>07 - July</option>
				  <option>08 - August</option>
				  <option>09 - September</option>
                                  <option>10 - October</option>
				  <option>11 - November</option>
				  <option>12 - December</option>
				</select>
	            <span style="width:10%; text-align: center"> / </span>
	            <select class="form-control" style="width:45%">
				  <option>YY</option>
				  <option>2012</option>
				  <option>2013</option>
                                  <option>2014</option>
				  <option>2015</option>
                                  <option>2016</option>
				  <option>2017</option>
                                  <option>2018</option>
				  <option>2019</option>
                                  <option>2020</option>
				  <option>2021</option>
                                  <option>2022</option>
				  <option>2023</option>
                                  <option>2024</option>
				  <option>2025</option>
                                  <option>2026</option>
				  <option>2027</option>
                                  <option>2028</option>
				  <option>2029</option>
                                  <option>2030</option>
				</select>
        	</div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
            <input class="form-control" required="" type="text">
        </div> 
    </div> 
</div> <!-- row.// -->

           
           <a href="success.php" class="subscribe btn btn-primary btn-block" role="button">Confirm</a>
        </form>
                             </div>
                     </div>
                             </div>
                         </div>
                     </div>
                 </div>
        
        
        <?php } } ?>
        
        <footer  id="f">
            <div class="container">
                <center>
                    <p>Copyright © Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000</p>
                </center>
            </div>
        </footer>
    </body>    
</html>

