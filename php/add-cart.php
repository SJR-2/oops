<?php 
  session_start(); 
$uid = $_SESSION['id'];
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

echo "size: ". $_POST["size"]. "<br>";
echo "color: ".$_POST["color"]. "<br>";
echo "amount: ". $_POST["quantity"]. "<br>";
echo "price: ". $_POST["price"]. "<br>";
echo "name: ". $_POST["productName"]. "<br>";
echo "type: ". $_POST["productType"]. "<br>";
echo "ID: ". $_POST["productID"]. "<br>";
echo "UID".$uid;


$productId = $_POST["productID"];
$quantity = htmlspecialchars($_POST["quantity"]);
$color = $_POST["color"];
$size = $_POST["size"];
$subtotal = $_POST["price"];
$productName= $_POST["productName"];
$productType = $_POST["productType"];
	


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





$sql = "INSERT INTO `shopcart`(`UID`, `productName`, `poductType`, `subtotal`, `unitsInCart`,`productID`,`size`) VALUES ($uid,'$productName','$productType',$subtotal,$quantity,$productId,'$size')";


if ($conn->query($sql) === TRUE) {
	header("location:../shop-cart.php");
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>