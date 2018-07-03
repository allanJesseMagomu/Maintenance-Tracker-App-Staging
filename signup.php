<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
        <header class="header">
        <h1>Maintence App Tracker</h1>
    </header> 
    </head>
    <nav class="hd2">
        <a href="index.php">ABOUT</a>
        <a href="login.php">LOGIN</a>
        <a href="" >ADMINISTRATOR SIGNUP</a>
    </nav>
  <link rel="stylesheet" type="text/css" href="assets/css/maintenance.css">

<body>
<form action="signup.php" method="post" style="border:1px solid #ccc">
  <?php include('errors.php') ?>
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br><br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password_1" required><br><br>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password_2" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="register">Sign Up</button>
    </div>
  </div>
  <p>Already a member? <a href="login.php">Login</a></p>
	</form>
	</body>
</html>
