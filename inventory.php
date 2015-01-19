<html>
<head>
    <script>
    function add() {
        var xmlhttp;
        var add_Name = document.getElementById("add_Name");
        var add_PNum = document.getElementById("add_PNum");
        var add_Quantity = document.getElementById("add_Quantity");
        var add_Location = document.getElementById("add_Location");
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","addItem.php",false);
            xmlhttp.send("nam=" add_Name . "&pnu=" . add_PNum . "&qua=" . add_Quantity . "&loc=" . add_Location);
            document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            xmlhttp.open("GET","addItem.php",false);
            xmlhttp.send("nam=" add_Name . "&pnu=" . add_PNum . "&qua=" . add_Quantity . "&loc=" . add_Location);
            document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
        }
    }
    </script>
</head>
<body>
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
    
    //Add:
    
    $connection->close();
?>
<input type="text" id="add_Name" value="Name">
<input type="text" id="add_PNum" value="Part #">
<input type="text" id="add_Quantity" value="Quantity">
<input type="text" id="add_Location" value="Location">
<button onclick="add()">Add Item</button>
<div id="notify"></div>
</body>
</html>