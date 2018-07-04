<?php
$con=mysqli_connect('localhost','root','');
if (!$con) {
	echo 'Not Connected To Server';
}
if (!mysqli_select_db($con,'registration')) {
	echo 'database not selected';
}
$fullName=$_POST['fullName'];
$Descrpt=$_POST['Descrpt'];

$sql="INSERT INTO requests (fullName,requestDescription) VALUES ('$fullName','$Descrpt')";
if (!mysqli_query($con,$sql)) {
	echo 'Not Inserted';
}
else
{
	echo 'Inserted';
}
header("refresh:2; url=makeReq.php");
?>
