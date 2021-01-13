<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" href="css/login.css">
</head>    
<body>    
    <nav>
        <ul> 
            <li><a href="index.php">Home</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a class="active" href="login.php">Login</a></li>
            <li><a href="donorList.php">Find Donor</a></li>
        </ul>
    </nav>

    <div class='rForm'>
        <form action="info.php" method="post">
            <h2>Login Form</h2>
            <p>Registration Successfull,Log in here</p>
            <div class="row">
                <div class="col-25">
                    <label for="num">Phone Number</label>               
                 </div>  
                <div class="col-75">
                    <input type="tel" name="num" id="num" minlength="11" placeholder="Type Phone Number" required>   
                </div>
            </div>  
 
            <div class="row">
                <div class="col-25">
                    <label for="psw">Password</label>
                 </div>  
                <div class="col-75">
                    <input type="password" id="psw" name="psw" minlength="8" placeholder="Type Password"required>
  
                </div>
            </div>  

            <div class="row">
                <input type="submit" value="Login">
            </div>  
        </form>   
  </div> 
</body>    
</html>     
