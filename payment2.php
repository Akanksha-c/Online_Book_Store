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
              $name=$_POST['name'];
              $contact=$_POST['contact'];
              $pin=$_POST['pincode'];
              $add=$_POST['address'];
              $city=$_POST['city'];
              $state=$_POST['state'];
              
              $query="insert into ship(uid,name,contact,pincode,address,city,state) values ('$uid','$name','$contact','$pin','$add','$city','$state')";
              $user_submit=mysqli_query($con, $query) or die(mysqli_errno($con));
              
              header("Location: checkout1.php");
          ?> 
    </body>
</html>

