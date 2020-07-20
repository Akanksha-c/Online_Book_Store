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
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $email=$_POST['email'];
            $pass=$_POST['password'];
            $query = "select * from sign_up where email='$email' and password='$pass'";
            $execute_query=mysqli_query($con, $query);
            $total_rows=mysqli_num_rows($execute_query); 
        
        if( $total_rows == 1)
        {
           $query1="select uid from sign_up where email='$email' and password='$pass'";
           $res=mysqli_query($con, $query1);
           $row=  mysqli_fetch_array($res);
           $_SESSION['email']= $email;
           $_SESSION['uid']=$row[0];
           header("Location: products.php");
           exit();
        }
        else
        {
            $_SESSION['errorMessage'] = 1;
            header("Location: login.php");
            exit();
        }
          ?>
    </body>
</html>

