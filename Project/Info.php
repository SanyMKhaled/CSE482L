<?php
$uname = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$num = $_POST['num'];
$psw = $_POST['psw'];
$blood_group = $_POST['bg'];
$today = date("d/m/Y");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vbb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
if (mysqli_query($conn, "INSERT INTO registration (id,uname, age,gender,email,num,psw,blood_group,date_created) VALUES ('','$uname', '$age','$gender','$email','$num','$psw','$blood_group','$today')")) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

header('Location: login.php');

mysqli_close($conn);
?>