<html>
<head>
    <link rel = "stylesheet" href = "styles.css">
<head>
<h1>1764 Inventory System</h1>
<br>
<form action="admincp.php"><input type="submit" value="Back"></form>
<?php
    $servername = "mysql.aufdemsee.com";
    $sqlusername = "1764website";
    $sqlpassword = "1764websiteUser";
    $dbname = "1764_inventory";
 
    $connection = new mysqli($servername, $sqlusername, $sqlpassword, $dbname);
 
    $sql = "SELECT * FROM inventory";
    $result = $connection->query($sql);
    echo "<table>";
    echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Part Number</th>";
        echo "<th>Quantity</th>";
        echo "<th>Location</th>";
    echo "</tr>";
        while($row = $result->fetch_assoc())
        {
            echo "<tr>";
                echo "<td>".$row["Name"]."</td>";
                echo "<td>".$row["Part Number"]."</td>";
                echo "<td>".$row["Quantity"]."</td>";
                echo "<td>".$row["Location"]."</td>";
            echo "</tr>";
        }
    echo "</table>";
    $connection->close();
?>
<script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript">
    function doSomething() {
        $.get("somepage.php");
        return false;
    }
    </script>

    <a href="#" onclick="doSomething();">Click Me!</a>
</html>