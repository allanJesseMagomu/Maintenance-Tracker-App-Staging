<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="c.css"> 
  <title>Login page</title>
        <header class="header">
        <h1>Maintenance Tracker App</h1>
    </header> 
    <nav class="hd2">
        <a href="index.php">ABOUT</a>
        <a href="login.php">LOGIN</a>
        <a href="signup.php">SIGN UP</a>
        <a href="" >ADMINISTRATOR SIGNUP</a>
    </nav>
  
</head>
<body>

<form action="login.php" method="post">
  <h2>Login</h2>
  	<p>
    <label for="uname" class="floatLabel"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    </p>
    <p>
    <label for="psw" class="floatLabel"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    </p>
    <p>
    <input type="submit" value="Login" id="submit" name="login">
    </p>
    <p>
    <input type="button" value="Cancel" class="cancelbtn" name="login">
    </p>
    <p>
    <b>Forgot <a href="#">password?</a></b>
    </p>
 <p><b>Not yet a member? <a href="signup.php">Sign up</a></b></p>
</form>

</body>
</html>
