<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
    <script src="js/app.js"></script>
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
        <form action="loginValidation.php" method="post">
            <h2>Login</h2>
            <p id='rmvP'>Registration Successfull,Log in here</p>
            <div class="row">
                <div class="col-25">
                    <label for="email">Email:</label>
                </div>  
                <div class="col-75">
                    <input type="email" name="email" id="email" placeholder="Type Email"required>   
                </div>
            </div>   
 
            <div class="row">
                <div class="col-25">
                    <label for="psw">Password:</label>
                 </div>  
                <div class="col-75">
                    <input type="password" id="psw" name="psw" minlength="8" placeholder="Type Password"required>
  
                </div>
            </div>  

            <div class="row">
                <input type="submit" value="Login" name='login'>
            </div>  
        </form>   
  </div> 
</body>    
</html>     
