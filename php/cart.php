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

$uname = $_SESSION["username"];
$uid = array();
$sql = "SELECT `id` FROM `users` WHERE username = '$uname'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
    	$uid = array("uid" => $row["id"]);

        

    }
} else {
    // echo "0 results from cart with user ID = " .$ud ;
}




 $_SESSION['id'] = $uid["uid"];

$ud = $_SESSION['id'];

$items = array();
$ud = $_SESSION['id'];




$sql = "SELECT * FROM `shopcart` where UID = $ud";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
    	$items[] = array("uid" => $row["UID"], "productName" => $row["productName"], "subtotal" => $row["subtotal"], "unitsInCart" =>$row["unitsInCart"], "productID" =>$row["productID"], "size" => $row["size"]);

        

    }
} else {
  // echo "0 results"; 
}

$conn->close();









 
?>