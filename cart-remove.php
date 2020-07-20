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
          include 'connection.php';
          $uid=$_SESSION['uid'];
          $item_id=$_GET['id'];
          $query="delete from user_items where uid=$uid and item_id=$item_id";
          $res=mysqli_query($con, $query);
          header("Location: cart.php");
     ?>
    </body>
</html>
