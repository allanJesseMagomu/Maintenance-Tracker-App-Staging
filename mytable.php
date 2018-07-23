<?php 
session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"registration");
if(isset($_REQUEST["submit"]))
{
	$user=$_REQUEST["username"];
	$pass=$_REQUEST["password"];
	$query=mysqli_query($conn,"SELECT * FROM user WHERE username='$user' && password='$pass'");
	$rowcount=mysqli_num_rows($query);
	if($rowcount==true)
	{
		$_SESSION["username"]=$user;
		
		header('location:welc.php');
}
echo "<center> your username and password is wrong</center>";
}

?>
<h2>Login.</h2>
<form action="" method="post">
  
  <div class="container">
    <label for="uname"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" class="us" name="username" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required><br>

    <button type="submit"name="submit">Login</button>


