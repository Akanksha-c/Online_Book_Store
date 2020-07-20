<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
             function check_if_added_to_cart($item_id)
             {
                 $con=mysqli_connect("localhost","root","","book_store") or die(mysqli_error($con));
                 //session_start();
                 $uid=$_SESSION['uid'];
                 $query="SELECT * FROM user_items WHERE item_id=$item_id AND uid=$uid and status='Added to cart'"; 
                $execute_query=mysqli_query($con, $query);
                $total_rows=mysqli_num_rows($execute_query);
                 if($total_rows>=1)
                 {
                     return 1;
                 }
                 else 
                 {
                     return 0;
                 }
             }
        ?> 
    </body>
</html>

