<?php
function conectionStart()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vbb";
$connection = mysqli_connect($servername, $username, $password, $dbname);
return $connection;
}
function conectionEnd($value)
{
mysqli_close($value);
}
function fetch($value=’’)
{
$connection = conectionStart();
$sql = "SELECT * FROM registration WHERE uname LIKE '%".$value."%' OR age LIKE '%".$value."%' OR blood_group LIKE '%".$value."%' OR num LIKE '%".$value."%' OR addr LIKE '%".$value."%'OR gender LIKE '%".$value."%'";
$result = mysqli_query($connection, $sql);
if($result) {
while ($row = mysqlI_fetch_assoc($result)) {
echo "<tr>";
echo "<td>".$row['uname']."</td>";
echo "<td>".$row['age']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['blood_group']."</td>";
echo "<td>".$row['num']."</td>";
echo "<td>".$row['addr']."</td>";
echo "</tr>";
}
echo "</table>";
} else {
echo "Error :".$sql."<br>".mysqli_error($connection);
}
conectionEnd($connection);
}
if (isset($_GET['search'])) {
fetch($_GET['search']);
}
?>