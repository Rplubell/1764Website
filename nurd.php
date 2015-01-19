<?php session_start(); ?>
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
        <form action="logging.php" method="POST">
            <input type ="text" name="username" value="Username">
            <input type="password" name="password">
            <input type="submit" name="submit" value="Login">
        </form>
    </body>
</html>