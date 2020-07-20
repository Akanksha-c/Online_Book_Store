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
             if(!isset($_SESSION['uid']))
             {
                 header("Location:index.php");
             }
             else
             {
               session_unset();
               session_destroy();
               header("Location: index.php");
             }
        ?>
    </body>
</html>

