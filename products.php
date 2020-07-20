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
        <title>SHOP</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css1/index.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #con{
                margin-top: 80px;
                  
            }
            button{
                width:230px;
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
            <div class="jumbotron">
                <h1 style="color:violet">Welcome <span style="color:lightskyblue">To</span> <span style="color:lightgreen">The</span> <span style="color:yellow">World</span>
                    <span style="color:orange">Of</span> <span style="color:red">Books!</span></h1>
            </div>
        </div>
        
        <?php
            include 'check_if_added.php';
        ?>
        
        <div class="container">
            <h2>MYSTERY:</h2>
        <div class="row text-center">
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    
                    <img src="img/b1.jpg">
                    <h3>The Da Vinci Code</h3>
                    <p>Dan Brown</p>
                    <h4>Price Rs.300.00</h4>
                 
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">The Da Vinci Code</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>A murder in Paris' Louvre Museum and cryptic clues
                                                     in some of Leonardo da Vinci's most famous paintings
                                                     lead to the discovery of a religious mystery. 
                                                     For 2,000 years a secret society closely guards information that 
                                                     -- should it come to light -- could rock the very foundations of Christianity.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                        
                    <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(1)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=1" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                    
                </div>
            </div>
            
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                 <div class="thumbnail">
                    <img src="img/b2.jpg" alt="2">
                    <h3>Chasing Tomorrow</h3>
                    <p>Sidney Sheldon</p>
                    <h4>Price Rs.320.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal1">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal1" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">Chasing Tomorrow</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>When a mysterious and beautiful stranger enters their lives,
                                                     Tracy and Jeff's once unbreakable partnership is suddenly blown wide open.
                                                     Jeff wakes one morning to find Tracy gone, vanished without a trace. For more than a decade,
                                                     a broken Jeff struggles to carry on knowing Tracy is out there somewhere.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                     <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(2)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=2" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
            
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                 <div class="thumbnail">
                    <img src="img/b3.jpg">
                    <h3>The Eyes Of Darkness</h3>
                    <p>Dean Koontz</p>
                    <h4>Price Rs.445.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal2">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal2" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">The Eyes Of Darkness</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>Tina Evans has spent a year suffering from incredible heartache since her son Danny's tragic death. But now, with her Vegas show about to premiere, Tina can think of no better time for a fresh start. Maybe she can finally move on and put her grief behind her.

Only there is a message for Tina, scrawled on the chalkboard in Danny's room: NOT DEAD. Two words that send her on a terrifying journey from the bright lights of Las Vegas to the cold shadows of the High Sierras, where she uncovers a terrible secret...</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                       <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(3)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=3" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
        </div>
        </div>
        
        <!--5 and 6 and 7 -->
        <div class="container">
        <div class="row text-center">
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b4.jpg">
                    <h3>The Girl On The Train</h3>
                    <p>Paula Hawkins</p>
                    <h4>Price Rs.266.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal4">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal4" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">The Girl On The Train</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>Commuter Rachel Watson (Emily Blunt) catches daily glimpses of a seemingly perfect couple,
                                                     Scott and Megan, from the window of her train. One day, Watson witnesses something shocking
                                                     unfold in the backyard of the strangers' home. Rachel tells the authorities what she thinks
                                                     she saw after learning that Megan is now missing and feared dead. Unable to trust her own memory, 
                                                     the troubled woman begins her own investigation,
                                                     while police suspect that Rachel may have crossed a dangerous line.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                        <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(4)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=4" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
            
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b5.jpg">
                    <h3>Gone Girl</h3>
                    <p>Gillian Flynn</p>
                    <h4>Price Rs.246.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal5">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal5" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">Gone Girl</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>In Carthage, Mo., former New York-based writer Nick Dunne (Ben Affleck) and his glamorous wife Amy (Rosamund Pike) present a portrait of a blissful marriage to the public. However, when Amy goes missing on the couple's fifth wedding anniversary, Nick becomes the prime suspect in her disappearance. The resulting police pressure and media frenzy cause the Dunnes' image of a happy union to crumble,
                                                     leading to tantalizing questions about who Nick and Amy truly are.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                       <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(5)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=5" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
       
        
        <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b6.jpg">
                    <h3>The Eleventh Commandment</h3>
                    <p>Jeffrey Archer</p>
                    <h4>Price Rs.324.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal6">Summary</button>
                    <p></p>
                     
                      <div id="myModal6" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">The Eleventh Commandment</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>The book starts with the murder of a candidate for the Colombian presidency.
                                                     During this time, Helen finds out that she would be fired if she is found out 
                                                     to be ordering assassinations on several nations. To cover up her work she plans
                                                     to have her chief assassin, Connor Fitzgerald, eliminated.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                        <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(6)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=6" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
             </div>
       </div>
        
        <!--Third row with new category-->
        <div class="container  column-style">
            <h2>BIOGRAPHY:</h2>
        <div class="row text-center">
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b7.jpg">
                    <h3>The Diary Of A Young Girl</h3>
                    <p>Anne Frank</p>
                    <h4>Price Rs.206.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal7">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal7" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">The Diary Of A Young Girl</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>Anne Frank was a young Jewish girl living in Amsterdam during the Holocaust. She receives a diary for her birthday; she hopes it will be a 'great source of comfort and support. ' Anne's diary begins at a crucial point in her life, 
                                                     and in the diary Anne depicts her life in hiding from the Nazis.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                        <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(7)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=7" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
            
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b8.jpg">
                    <h3>Elon Musk</h3>
                    <p>Ashlee Vance</p>
                    <h4>Price Rs.265.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal8">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal8" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">Elon Musk</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>Elon Musk is the first official biography of the creator of SolarCity, SpaceX and Tesla, based on over 30 hours of conversation time between author Ashlee Vance and Musk himself, highlighting his complicated childhood, the way he makes decisions
                                                     and navigates the world, and how he managed to disrupt ...</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                        <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(8)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=8" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
       
        
        <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b9.jpg">
                    <h3>The Wings Of Fire</h3>
                    <p>Abdul Kalam</p>
                    <h4>Price Rs.275.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal9">Summary</button>
                    <p></p>
                     
                      <div id="myModal9" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">The Wings Of Fire</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>An Autobiography of A P J Abdul Kalam (1999), former President of India. It was written by Dr. Kalam and Arun Tiwari. Kalam examines his early life, effort, hardship, fortitude, luck and chance that eventually 
                                                     led him to lead Indian space research, nuclear and missile programs.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                       <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(9)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=9" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
             </div>
       </div>
        
        
        <!--4 and 5 and 6 of 2nd category-->
        <div class="container">
        <div class="row text-center">
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b10.jpg">
                    <h3>Steve Jobs</h3>
                    <p>Walter Isaacson</p>
                    <h4>Price Rs.319.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal10">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal10" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">Steve Jobs</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>Steve Jobs is the most detailed and accurate account of the life of the man who created Apple, 
                                                     the most valuable technology company in the world. My mum gave me Steve Jobs for St. Nicholas Day in 2011, 
                                                     shortly after it had been released (3 weeks after his death).</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                        <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(10)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=10" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
            
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b11.jpg">
                    <h3>Long Walk To Freedom</h3>
                    <p>Nelson Mandela</p>
                    <h4>Price Rs.497.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal11">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal11" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">Long Walk To Freedom</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>The Autobiography of Nelson Mandela tells the life story of South Africa’s first post-apartheid president.
                                                     Mandela rose to the leadership of the antiapartheid struggle to become one of the 20th century’s most iconic world leaders. 
                                                     He began writing the book in prison in 1975, and it was published in 2004.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                        <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(11)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=11" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
       
        
        <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b12.jpg">
                    <h3>Playing It My Way</h3>
                    <p>Sachin Tendulkar</p>
                    <h4>Price Rs.369.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal12">Summary</button>
                    <p></p>
                     
                      <div id="myModal12" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">Playing It My Way</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>Playing It My Way is the autobiography of former Indian cricketer Sachin Tendulkar. 
                                                     It was launched on 5 November 2014 in Mumbai. The book summarises Tendulkar's early days, his 24 years of 
                                                     international career and aspects of his life that have not been shared publicly.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                        <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(12)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=12" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
             </div>
       </div>
        
        <!--3rd category row-->
        <div class="container column-style">
            <h2>FICTION:</h2>
        <div class="row text-center">
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b13.jpg">
                    <h3>Harry Potter And The Goblet Of Fire</h3>
                    <p>J.K.Rowling</p>
                    <h4>Price Rs.349.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal13">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal13" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">Harry Potter And The Goblet Of Fire</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>The fourth movie in the Harry Potter franchise sees Harry (Daniel Radcliffe) returning for his fourth year at Hogwarts School of Witchcraft and Wizardry, along with his friends, Ron (Rupert Grint) and Hermione (Emma Watson). There is an upcoming tournament between the three major schools of magic, with one participant selected from each school by the Goblet of Fire. When Harry's name is drawn, even though he is not eligible
                                                     and is a fourth player, he must compete in the dangerous contest.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                        <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(13)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=13" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
            
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b14.jpg">
                    <h3>The Hunger Games</h3>
                    <p>Suzanne Collins</p>
                    <h4>Price Rs.312.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal14">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal14" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">The Hunger Games</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>The story is centered on a 16-year-old girl, Katniss Everdeen and her struggle for survival in dystopia. Each year, as a punishment for the failed rebellion by District 13, the 12 Panem Districts are forced to pay tribute to the ruthless Capitol regime.
                                                     The story begins on the day of reaping at District 12.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                       <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(14)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=14" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
       
        
        <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b15.jpg">
                    <h3>The Shining</h3>
                    <p>Stephen King</p>
                    <h4>Price Rs.291.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal15">Summary</button>
                    <p></p>
                     
                      <div id="myModal15" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">The Shining</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>Jack Torrance (Jack Nicholson) becomes winter caretaker at the isolated Overlook Hotel in Colorado, 
                                                     hoping to cure his writer's block. He settles in along with his wife, Wendy (Shelley Duvall),
                                                     and his son, Danny (Danny Lloyd), who is plagued by psychic premonitions. As Jack's writing goes nowhere and Danny's visions become more disturbing, Jack discovers the hotel's dark secrets and begins to 
                                                     unravel into a homicidal maniac hell-bent on terrorizing his family.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                       <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(15)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=15" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
             </div>
       </div>
        
        <!--4 and 5 and 6-->
        <div class="container">
        <div class="row text-center">
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b16.jpg">
                    <h3>The Fault In Our Stars</h3>
                    <p>John Green</p>
                    <h4>Price Rs.200.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal16">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal16" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">The Fault In Our Stars</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>The Fault In Our Stars is a fabulous book about a young teenage girl who has been diagnosed with lung cancer and attends a cancer support group. Hazel is 16 and is reluctant to go to the support group, but she soon realises
                                                     that it was a good idea. Hazel meets a young boy named Augustus Waters.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                        <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(16)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=16" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
            
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b17.jpg">
                    <h3>Pride And Prejudice</h3>
                    <p>Jane Austen</p>
                    <h4>Price Rs.160.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal17">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal17" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">Pride And Prejudice</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>Pride and Prejudice is set in rural England in the early 19th century, and it follows the Bennet family, which includes five very different sisters. Mrs. Bennet is anxious to see all her daughters married, especially as the modest family
                                                     estate is to be inherited by William Collins when Mr. Bennet dies.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                       <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(17)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=17" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
       
        
        <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b18.jpg">
                    <h3>Summer Sisters</h3>
                    <p>Judy Blume</p>
                    <h4>Price Rs.499.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal18">Summary</button>
                    <p></p>
                     
                      <div id="myModal18" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">Summer Sisters</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>Summer Sisters is a coming-of-age novel about two friends, Caitlin Somers and Victoria "Vix" Leonard, who spend every summer together as teenagers. The girls are polar opposites, Caitlin being beautiful, 
                                                     lively and popular while Vix is a shy but intellectual wallflower.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                        <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(18)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=18" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
             </div>
       </div>
        
        <!--4th category-->
        <div class="container column-style">
            <h2>BOOKS FOR CHILDREN AND TEENS:</h2>
        <div class="row text-center">
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b19.jpg">
                    <h3>Charlie And The Chocolate Factory</h3>
                    <p>Roald Dahl</p>
                    <h4>Price Rs.211.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal19">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal19" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">Charlie And The Chocolate Factory</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>A young boy wins a tour through the most magnificent chocolate factory in the world, 
                                                     led by the world's most unusual candy maker. When Willy Wonka decides to let five children into his chocolate factory, he decides to release five golden tickets 
                                                     in five separate chocolate bars, causing complete mayhem.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                        <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(19)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=19" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
            
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b20.jpg">
                    <h3>The Famous Five: Five Go Down To The Sea</h3>
                    <p>Enid Blyton</p>
                    <h4>Price Rs.135.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal20">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal20" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">The Famous Five: Five Go Down To The Sea</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>Five Go Down To The Sea is the twelfth novel in The Famous Five series by Enid Blyton. 
                                                     It was first published in 1953. The Famous Five decide to spend their time at a lonely and desolate farm in Cornwall suggested by Uncle Quentin and encounter Mr Penruthlan. 
                                                     They hear strange stories of the long ago wrecking business.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                       <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(20)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=20" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
       
        
        <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b21.jpg">
                    <h3>Nancy Drew: Haunting Of Horse Island</h3>
                    <p>Carolyn Keene</p>
                    <h4>Price Rs.366.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal21">Summary</button>
                    <p></p>
                     
                      <div id="myModal21" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">Nancy Drew: Haunting Of Horse Island</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>Nancy gallops full speed into danger when she, Bess, and George spend a week at the Steadman Resort. The girls can't wait to join in the fun, but their plans are put on hold when the Steadmans ask Nancy to find out who is sabotaging the resort. Cabins have been set afire, 
                                                     rooms ransacked, and guests claim to have seen a ghost.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                        <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(21)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=21" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
             </div>
       </div>
        
        <!--4 and 5 and 6-->
        <div class="container">
        <div class="row text-center">
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b22.jpg">
                    <h3>Goosebumps: Trick or Trap</h3>
                    <p>R.L.Stine</p>
                    <h4>Price Rs.179.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal22">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal22" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">Goosebumps: Trick or Trap</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>Trick or Trap is the third book in the Goosebumps Most Wanted: Special Edition sub-series. It was published in 2015. The cover art shows a zombified hand bursting out of a grave holding a torn bag of candy.
                                                     A zombified leg is sticking out of the grave next to it.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                        <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(22)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=22" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
            
            <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b23.jpg">
                    <h3>Prince Caspian</h3>
                    <p>C.S.Lewis</p>
                    <h4>Price Rs.212.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal23">Summary</button>
                    <p></p>
                     <!-- Modal -->
                      <div id="myModal23" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">Prince Caspian</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>One year after their previous adventure, the Pevensie children (Georgie Henley, Skandar Keynes, William Moseley, Anna Popplewell) return to the magical land of Narnia and find that 1300 years have passed there. War has come to Narnia once again, and the children join forces with Prince Caspian (Ben Barnes)
                                                     to overthrow the evil King Miraz and restore peace to the land.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                        <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(23)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=23" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
                </div>
            </div>
       
        
        <div class=" col-md-3 col-xs-offset-1 col-sm-6">
                <div class="thumbnail">
                    <img src="img/b24.jpg">
                    <h3>The Princess Diaries</h3>
                    <p>Meg Cabot</p>
                    <h4>Price Rs.197.00</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal24">Summary</button>
                    <p></p>
                     
                      <div id="myModal24" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        
                         <div class="modal-content">
                             <div class="modal-header">
                                 <center>
                                     <h3 class="modal-title"  style="color:red">The Princess Diaries</h3>
                                 </center>
                                        </div>
                                            <div class="modal-body">
                                                 <p>The Princess Diaries is the diary of Mia Thermopolis, a fifteen-year-old freshman at the fictional Albert Einstein High School (AEHS), a private school in New York City. Mia is a tall, flat chested, big footed socially awkward teenager who was raised by her
                                                     liberal artist mother Helen in Greenwich Village, Manhattan.</p>
                                            </div>
                                         <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                           </div>
                     </div>
                                        <?php 
                       if (!isset($_SESSION['uid'])) 
                       { ?>                                 
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                         <?php                         
                           } else {                                 
                            if (check_if_added_to_cart(24)) {   
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                            } else {                                    
                          ?>                                    
                          <a href="cart-add.php?id=24" class="btn btn-block btn-primary" role="button">Add to cart</a>   
                        <?php                           
                            }                          
                        }                            
                     ?>
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

