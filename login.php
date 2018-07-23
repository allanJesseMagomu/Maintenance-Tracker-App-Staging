<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
<div class="imgcontainer">
    
  </div>

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
  <link rel="stylesheet" type="text/css" href="assets/css/maintenance.css">
</head>
<body>
<h2>Login.</h2>
<form action="login.php" method="post">
  
  <div class="container">
    <label for="uname"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" class="us" name="username" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required><br>

    <button type="submit" name="login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" name="login">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<p>Not yet a member? <a href="signup.php">Sign up</a></p>
</body>
</html>
