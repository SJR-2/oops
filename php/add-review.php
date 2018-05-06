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


$name = htmlspecialchars($_POST["name4"]);
$subject = htmlspecialchars($_POST["subject4"]);
$rating = htmlspecialchars($_POST["review"]);
$message = htmlspecialchars($_POST["message"]);
$buyagain = htmlspecialchars($_POST["buyAgain"]);
$productname = htmlspecialchars($_POST["clothingname"]);
$productId = htmlspecialchars($_POST["item"]);




echo $name.'<br>';
echo $subject.'<br>';
echo $rating.'<br>';
echo $message.'<br>';
echo $buyagain.'<br>';
echo $productname.'<br>';
echo "id is " .$productId. '<br>';


// $sql = "INSERT INTO `productreview`(`userName`, `subject`, `rating`, `message`, `buyAgain`, `clothingName`) VALUES ('$name','$subject','$rating','$message',$buyagain,'$productname')";

// prepare and bind
$stmt = $conn->prepare("INSERT INTO `productreview`(`userName`, `subject`, `rating`, `message`, `buyAgain`, `clothingName`,`ID`)  VALUES (?, ?, ?,?,?,?,?)");
$stmt->bind_param("ssisisi", $name, $subject, $rating,$message,$buyagain,$productname,$productId);
$stmt->execute();

echo "New records created successfully";


 

$stmt->close();
$conn->close();


///cross site scripting
 header('location:../shop-product.php?item='.$productId.'');


// if ($conn->query($sql) === TRUE) {

//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }


// $conn->close();


?>
