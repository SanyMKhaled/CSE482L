<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vbb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])){
    $email = $_POST['email'];
    $psw = $_POST['psw'];
}
session_start();
      
      $sql = "SELECT email,psw FROM registration WHERE email = '$email' AND psw = '$psw'";
      $result = mysqli_query($conn,$sql);
      if($result){
        header("location: donorlist.php");
      }
      else {
        $error = "Your Login Name or Password is invalid";
      }
?>