<html>
    <head>
        <title>PAYMENT</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css1/index.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #add{
                margin-top: 100px;
                width:500px;
                margin-left: 300px;
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
        
       <?php $a=array("575001","575002","575003","575004","575005","575006","575007","575008","575009","575010","575011",
           "575012","575013","575014","575015","575016","575019","575028","575029","575030","574142","574173" ,"574118"
           ,"574101","574102","574103","574108","574101","574110");
             session_start();
             $_SESSION["pin"]=0;
             $pc=$_POST['name'];
             foreach($a as $pin)
             {
                 if($pin===$pc)
                 { 
                      $_SESSION["pin"]=1;
                      $_SESSION["code"]=$pc;
                      echo $_SESSION["code"];
                      header("Location: payment.php");
                      exit();
                 }
             }  
        
        header("Location: payment.php");
        ?>
        <footer>
            <div class="container">
                <center>
                    <p>Copyright © Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000</p>
                </center>
            </div>
        </footer>
    </body>    
</html>


    </body>
</html>


