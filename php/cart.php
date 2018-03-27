<?php


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




$sql = "SELECT name, price, color, size FROM clothing";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo  $row["name"] . " ". $row["price"]." " . $row["color"]. " ". $row["size"] ."<br>";
    	$items[] = array("name" => $row["name"], "price" => $row["price"], "color" => $row["color"], "size" => $row["size"]);

        

    }
} else {
    echo "0 results";
}

$conn->close();

for($row=0; $row<count($items); $row++){
echo $items[$row]["price"]. ": price<br>";
}


// $sCart[$count] = array("quantity" =>$_GET['quantity'] ,"productName"=> $_GET['productName'] , "price"=>$_GET['price'], "size"=>$_GET['size'], "color"=> $_GET['color']);







 
?>