<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript"  src="jquery-3.3.1.js"></script>
	<script src='filter.js' ></script>
	
        <link rel="stylesheet" type="text/css" href="assets/css/maintenance.css">
<header class="header">
        <h1>Maintenance App Tracker</h1>
    </header>
    <nav class="hd2">
        <a href="index.php">ABOUT</a>
        <a href="signup.php">SIGN OUT</a>
        <a href="viewTable.php">VIEW MY REQUESTS</a>
		<a href="viewTable.php">VIEW ALL REQUESTS</a>
    </nav>
</head>

<body>

	<div class="odiv">
        <div align="center">
    Filter By Status:<select id="selectField" class="req">
    <option value="approved">Approved</option>
    <option value="rejected">Rejected</option>
    <option value="pending">Pending</option>
    <option value="complete">Complete</option>
</select>
</div>
		
	<h1 style="text-align:center">Maintenance Requests added.</h1>
		<div class="idiv">
			        <?php
$con=mysqli_connect("localhost","root","");
if (!$con) {
	die("can not connect:".mysqli_error());

}
mysqli_select_db($con,"registration");
$sql="SELECT * FROM requests";
$myData=mysqli_query($con,$sql);
echo "<table align='center' id='myTable'> 
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
		</div>	
	</div>
</body>
</html>