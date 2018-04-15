<?php
  session_start(); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopapparel";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$items = array();
$ud = $_SESSION['id'];




$sql = "SELECT `UID`, `productName`, `poductType`, `subtotal`, `unitsInCart` FROM `shopcart` where UID = '$ud'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
    	$items[] = array("uid" => $row["UID"], "productName" => $row["productName"],"productType" =>$row["productType"], "subtotal" => $row["subtotal"], "unitsInCart" =>$row["unitsInCart"]);

        

    }
} else {
    echo "0 results";
}

$conn->close();









 
?>