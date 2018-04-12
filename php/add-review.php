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



$name = $_POST['name4'];
$subject= $_POST['subject4'];
$rating= $_POST['review'];
$message= $_POST['message4'];
$buyagain= $_POST['buyAgain'];
$productname= $_POST['clothingname'];


echo $name.'<br>';
echo $subject.'<br>';
echo $rating.'<br>';
echo $message.'<br>';
echo $buyagain.'<br>';
echo $productname;


// $sql = "INSERT INTO `productreview`(`userName`, `subject`, `rating`, `message`, `buyAgain`, `clothingName`) VALUES ('$name','$subject','$rating','$message',$buyagain,'$productname')";

// prepare and bind
$stmt = $conn->prepare("INSERT INTO `productreview`(`userName`, `subject`, `rating`, `message`, `buyAgain`, `clothingName`)  VALUES (?, ?, ?,?,?,?)");
$stmt->bind_param("ssisis", $name, $subject, $rating,$message,$buyagain,$productname);
$stmt->execute();

echo "New records created successfully";


 

$stmt->close();
$conn->close();


 // header('location:../shop-product.php?item='.$productname.'');


// if ($conn->query($sql) === TRUE) {

//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }


// $conn->close();


?>