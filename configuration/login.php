<?php
$servername = "localhost";
$username = "jahaann";
$password = "Jahaann#321";
$database = "jahaann";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
session_start();
$email = $_POST['email'];
$pass = $_POST['password'];
$result = mysqli_query($conn, "SELECT * FROM accounts WHERE email = '$email' and pass='$pass'");
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  // $_SESSION["id"] = $id;
  $_SESSION["use"] = $email;
  // $_SESSION["name"] = $name;
  $_SESSION["stat"] = $row["status"];
  $_SESSION["name"] = $row["name"];
  $_SESSION["user_level"] = $row["user_level"];
  $_SESSION["on"] = "Login Successfully";

  header('location: ../pages/areal_view.php');
  // Redirecting on the base of thier permissions
 
//   $permstring = $row['user_level']; 
//   $userLevelArray = explode(",", $permstring);  

//   // $numberToCheck = 1;
//   if (in_array(1, $userLevelArray)) {
//         header('location: home.php');
//   }else if(in_array(2, $userLevelArray)) {
//         header('location:sld.php');
//   }else if(in_array(3, $userLevelArray)) {
//         header('location: customized_trend.php');
//   }else if(in_array(4, $userLevelArray)) {
//         header('location: cost_report.php');
//  }else if(in_array(5, $userLevelArray)) {
//         header('location: add.role.php');
//  }else if(in_array(6, $userLevelArray)) {
//         header('location: home.php');
//  }else {
//         header('location: error.php');
//  }

}else {
  $_SESSION["in"] = "Invalid Email/Password";
  header("location:index.php");
}