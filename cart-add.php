
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
             $con=mysqli_connect("localhost","root","","book_store") or die(mysqli_error($con));
             session_start();
             $uid=$_SESSION['uid'];
             $item_id=$_GET['id'];
             $query="INSERT INTO user_items(uid, item_id, status) VALUES('$uid', '$item_id', 'Added to cart')";
             $res=mysqli_query($con, $query);
             header("Location: products.php");
        ?> 
    </body>
</html>
