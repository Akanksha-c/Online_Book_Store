
<html>
    <head>
        <meta charset="UTF-8">
        <title>Intro</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css1/index.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
            #con{
                margin-top:100px;
                width:600px;
                margin-bottom:85px;
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
         <?php     
         if(isset($_SESSION['uid'])) {              
             ?>                
                <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>  
                <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>   
                <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>  
                               
         <?php 
                } else { 
                    ?>      
                <li><a href="signup1.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>                   
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>       
                  <?php        
                  }      
                  ?>      
            </ul>      
        </div>   
    </div>
</div>
    </body>
</html>