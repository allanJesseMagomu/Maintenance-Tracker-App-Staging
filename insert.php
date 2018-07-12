<?php
$con=mysqli_connect('localhost','root','');
if (!$con) {
	echo 'Not Connected To Server';
}
if (!mysqli_select_db($con,'registration')) {
	echo 'database not selected';
}
$fullName=$_POST['fullName'];
$RequestType=$_POST['RequestType'];
$Descrpt=$_POST['Descrpt'];
$status=$_POST['stati'];



$sql="INSERT INTO requests (fullName,RequestType,requestDescription,Status) VALUES ('$fullName','$RequestType','$Descrpt','$status')";

if (!mysqli_query($con,$sql)) {
	echo 'Not Inserted';
}
else
{
	echo 'Inserted';
}
header("refresh:2; url=makeReq.php");
//insert selected option
			        
$con=mysqli_connect("localhost","root","");
if (!$con) {
	die("can not connect:".mysqli_error());

}
mysqli_select_db($con,"registration");
$sql="SELECT * FROM requests";
$myData=mysqli_query($con,$sql);
echo "<table align='right' id='myTable'> 
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Request Type</th>
<th>Request Description</th>
<th>Status</th>
</tr>";
while ($record=mysqli_fetch_array($myData)) {
	echo "<tr>";
	echo "<td>".$record['ID']."</td>";
	echo "<td>".$record['fullName']."</td>";
	echo "<td>".$record['RequestType']."</td>";
	echo "<td>".$record['requestDescription']."</td>";
	echo "<td>".$record['Status']."</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>