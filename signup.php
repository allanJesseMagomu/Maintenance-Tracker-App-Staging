<?php include ('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>signUp page</title>
        <header class="header">
        <h1>Maintenance Tracker App</h1>
    </header> 
    </head>
    <nav class="hd2">
        <a href="index.php">ABOUT</a>
        <a href="login.php">LOGIN</a>
        <a href="" >ADMINISTRATOR SIGNUP</a>
    </nav>
  <link rel="stylesheet" href="c.css">

<body>
<form action="signup.php" method="post">

    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <p>
    <label for="username" class="floatLabel"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    </p>
    <p>
    <label for="email" class="floatLabel"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    </p>
    <p>
    <label for="psw" class="floatLabel"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password_1" required>
    </p>
    <p>
    <label for="psw-repeat" class="floatLabel"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password_2" required>
    </p>
    <p>
    <input type="submit" value="Sign Up" id="submit" name="register">
    </p>
    
    <p><button type="button" class="cancelbtn">Cancel</button></p> 
      
  <p><b>Already a member? <a href="login.php">Login</a></b></p>
  <?php include('errors.php') ?>
  </form>
  </body>
</html>
