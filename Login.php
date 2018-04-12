       <div class="panel-body">
        <div class="row">
          <div class=col-md-12>
            <!-- IF THERE IS AN ERROR for the user or password information, then display this -->
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $UserName = $_REQUEST['email'];
    $pwd = $_REQUEST['pwd'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopapparel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM `traveluser`, traveluserdetails  WHERE UserName = '$UserName' AND Pass ='$pwd' AND traveluserdetails.UID = traveluser.UID";

//gets sql and connects query
$result = $conn->query($sql);

// gets results
$row = $result->fetch_assoc();
echo "<br>". $row["UserName"];
echo "<br>". $row["Pass"].'<br>';


if ($row["UserName"] == $UserName && $row["Pass"] == $pwd){
    
    // Set session variables
    $_SESSION["UserName"] = $row["UserName"];
    $_SESSION["name"] = $row["FirstName"];
    $_SESSION["lname"] = $row["LastName"];
    $_SESSION["pw"] = $row["Pass"];
    $_SESSION["joined"] = $row["DateJoined"];
    $_SESSION["modified"] = $row["DateLastModified"];
    $_SESSION["ID"] = $row["UID"];
    $_SESSION["Address"] = $row["Address"];
    $_SESSION["city"] = $row["City"];
    $_SESSION["privacy"] = $row["Privacy"];
    $_SESSION["country"] = $row["Country"];
    $_SESSION["postal"] = $row["Postal"];
    $_SESSION["phone"] = $row["Phone"];


     header('Location:shop.php');
} else {
    echo ' <div class="alert alert-warning alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Error: </strong> E-mail or password did not match our records.
            </div>';
  
}       

mysqli_close($conn);   

}

?>
           
            <!-- END disp;ay error -->

            <form action="login.php" method="post">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>

          </div>
        </div>
      </div>
