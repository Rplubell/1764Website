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
        <form action="logging.php">
            <input type ="test" name="username" value="Username">
            <input type="password" name="password">
            <input type="submit" value="Login">
        </form>
        <?php
            $servername = "mysql.aqualatus.com";
            $username = "test";
            $password = "";
            $dbname = "test_users";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "SELECT username FROM Users WHERE username = test";
            $result = $conn->query($sql);
            echo $result;
            $conn->close();
        ?>
    </body>
</html>
