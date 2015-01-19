<?php
    $nam = $_POST['nam'];
    $loc = $_POST['loc'];
    $qua = $_POST['qua'];
    $pnu = $_POST['pnu'];
    
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

    $sql = "SELECT * FROM `inventory` WHERE `name` = '$nam'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    if($row == 1) {
        //Entry exists
        $newAmt = result['Quantity'] - $qua;
        $sql = "INSERT INTO `inventory` ( `Name` , `Part Number` , `Quantity` , `Location`)VALUES ('test', 'test', ', 'test')";
    }

    $conn->close();
?>