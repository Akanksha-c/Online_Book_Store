<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>SETTINGS</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css1/index.css" rel="stylesheet" type="text/css"/>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #con{
                margin-top: 100px;
                width:500px;
                margin-bottom: 233px;
            }
        </style>
    </head>
    <body>
        <?php
             $con=mysqli_connect("localhost","root","","book_store") or die(mysqli_error($con));
             session_start();
             $name=  mysqli_real_escape_string($con,$_POST['name']);
             $email=$_POST['email'];
             $pass=$_POST['password'];
             $contact=$_POST['contact'];
             $city=$_POST['city'];
             $address=$_POST['address'];
             $query1="select * from signup where name='$name' and email='$email'";
             $res=mysqli_query($con,$query1);
             $total_rows=mysqli_num_rows($res);
             if($total_rows>0)
             {
                 header("Location: signup1.php");
                  exit();
             }
             else
             {
                 $query="insert into sign_up(name,email,password,contact,city,address) values ('$name','$email','$pass','$contact','$city','$address')";
                 $user_submit=  mysqli_query($con, $query) or die(mysqli_errno($con));
                 $query2="select uid from sign_up where email='$email' and password='$pass'";
                 $res2=mysqli_query($con, $query2);
                 $row=mysqli_fetch_array($res2);
                 $_SESSION['email']= $email;
                 $_SESSION['uid']=$row[0];
                 $_SESSION['name']= $name;
                  header("Location: login.php");
             }
        ?>
        <script type="text/javascript">
                window.location.href = "http://localhost:8080/my_project/login.php";
         </script>
    </body>
</html>

