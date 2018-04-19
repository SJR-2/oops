<?php 


session_start(); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopapparel";



echo $_POST['id']."<br>";
echo $_POST['units']."<br>";
echo $_SESSION['id']."<br>";

$id = $_POST['id'];
$units = $_POST['units'];
$ud = $_SESSION['id'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$uname = $_SESSION["username"];

$sql = "DELETE FROM `shopcart` WHERE UID = $ud AND unitsInCart = $units AND productID =$id ";


if ($conn->query($sql) === TRUE) {
	header("location:../shop-checkout.php");
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();





?>