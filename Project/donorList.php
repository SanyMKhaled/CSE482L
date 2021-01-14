<html lang="en" dir="ltr">
<head>
<title></title>
<link rel="stylesheet" href="css/donor.css">
<link rel="stylesheet" href="css/nav.css">
<script>
function usersearchTxt(str) {
    var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
if(this.readyState == 4 && this.status == 200){
document.getElementById('searchTxt').innerHTML = this.responseText;
    }
}
xmlhttp.open("GET","finder.php?search="+str,true);
xmlhttp.send();
console.log(str);
}
</script>
</head>
<body>
    <nav>
        <ul> 
            <li><a href="index.php">Home</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a  href="login.php">Login</a></li>
            <li><a class="active" href="donorList.php">Find Donor</a></li>
        </ul>
    </nav>

<label for="search"> Search Name or Blood Group</label>
<input id="searchBox" type="text" placeholder="Seacrh..." name="search" onkeyup="usersearchTxt(document.getElementById('searchBox').value);">
<div id="searchTxt">
<table id="donor">
<tr>
<th>Name</th>
<th>Age</th>
<th>Gender</th>
<th>Blood Group</th>
<th>Phone Number</th>
<th>Location</th>
</tr>
<?php
include 'finder.php';
echo fetch('');
?>
</table>
</div>
</body>
</html>