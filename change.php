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
             $pass=$_POST['opassword'];
             $pass1=$_POST['npassword'];
             $uid=$_SESSION['uid'];
             $query="select * from sign_up where uid=$uid and password='$pass'";
             $res=mysqli_query($con, $query);
             if(mysqli_num_rows($res)==1)
             {    
                   $update="update sign_up set password='$pass1' where uid=$uid";
                   $update_res=mysqli_query($con,$update) or die(mysqli_errno($con));
                   header("Location: products.php");
             }
             else
             {
                 echo "Invalid password";
                 header("Location: settings.php");
             }
          ?> 
    </body>
</html>

