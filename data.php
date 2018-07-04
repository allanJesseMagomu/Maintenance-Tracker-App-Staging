<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","");
if (!$con) {
	die("can not connect:".mysqli_error());

}
mysqli_select_db($con,"registration");
$sql="SELECT * FROM requests";
$myData=mysqli_query($con,$sql);
echo "<table border=1> 
<tr>
<th>Full Name</th>
<th>Request Description</th>
</tr>";
while ($record=mysqli_fetch_array($myData)) {
	echo "<tr>";
	echo "<td>".$record['fullName']."</td>";
	echo "<td>".$record['requestDescription']."</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>