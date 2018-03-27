<?php

// gets server information
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

// array to hold items for each row from data base
$items = array();



// selecting only name and price to display on shop page
$sql = "SELECT Distinct name,price,type FROM shopapparel";
$result = $conn->query($sql);

// loops through rows until there is 0 rows
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
    	$items[] = array("name" => $row["name"], "price" => $row["price"], "type"=> $row["type"]);


     
    }
    // if no rows 
} else {
    echo "0 results";
}

$conn->close();






?>