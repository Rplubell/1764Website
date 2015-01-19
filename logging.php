<html>
<body>
<?php
    $error = '';
    if(isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            $error = "Username or Password is invalid";
            echo $error;
        } else
        {
            $username = stripslashes($_POST['username']);
            $password = stripslashes($_POST['password']);
            $password = hash(md5, $password);

            $servername = "mysql.aufdemsee.com";
            $sqlusername = "1764website";
            $sqlpassword = "1764websiteUser";
            $dbname = "1764_inventory";

            // Create connection
            $conn = new mysqli($servername, $sqlusername, $sqlpassword, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM `users` WHERE `username` = '".$username."' AND `password` = '".$password."'";
            //$sql = "SELECT * FROM `users` WHERE `username` = 'test' AND `password` = '098f6bcd4621d373cade4e832627b4f6' LIMIT 0 , 30";
            $result = $conn->query($sql);
            $row = $result->num_rows;
            if($row == 1) {
                $_SESSION['login_user'] = $username;
                echo "Logged in as: " . $username;
                echo "<form action=\"admincp.php\"><input type=\"submit\" value=\"Go to Control Panel\"></form>";
            } else {
                $error = "Username or password is invalid...";
            }
            $conn->close();
        }
    }
?>
</body>
</html>