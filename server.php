<?php
session_start();
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="registration";
$errors=array();
//connect to the database
$conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

//if the register button is clicked
if(isset($_POST['register']))
{
$username= mysqli_real_escape_string($conn,$_POST['username']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password_1=mysqli_real_escape_string($conn,$_POST['password_1']);
$password_2=mysqli_real_escape_string($conn,$_POST['password_2']);
  
    //to ensure that form fields are filled properly
    if(empty($username)){
        array_push($errors,"Username is required");
    }
    if(empty($email)){
        array_push($errors,"Email is required");
    }
    if(empty($password_1)){
        array_push($errors,"Password is required");
    }
    if($password_1!=$password_2){
        array_push($errors,"The two passwords do not match");
    }
    
    //if there are no errors, save user to data base.
    if(count($errors)==0){
        $password=md5($password_1);//encrypt password before storing in database
        $sql="INSERT INTO users(username, email,password) VALUES('$username','$email','$password')";
        mysqli_query($conn,$sql);
        $_SESSION['username']=$username;
        $_SESSION['success']="you are now logged in";
        header('location:index.php');
    }
}
//log user in from login page.
if(isset($_POST['login'])){
    $username= mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    //ensure that form fields are filled properly
    if(empty($username)){
        array_push($errors,"Username is required");
    }
    if(empty($password)){
        array_push($errors,"Password is required");
    }
    if(count($errors)==0){
        $password=md5($password);
    $query="SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1){
            $_SESSION['username']=$username;
        $_SESSION['success']="you are now logged in";
        header('location:index.php');
        }else{
            array_push($errors,"wrong username/password combination");
        }
    }
}
//logout
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php');
}
?>
