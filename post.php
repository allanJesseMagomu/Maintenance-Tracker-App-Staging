<?php 
session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"registration");
if($_SESSION["username"]== true)
{
	echo "Welcome" . " " . $_SESSION["username"];
}
else
{
	header('location:mytable.php');
}

?>
<a href="mytable.php">Logout</a>

<?php
$user=$_SESSION["username"];
$query1 = mysqli_query($conn,"SELECT * FROM user WHERE username='$user'");
$row1=mysqli_fetch_array($query1);
$id=$row1["id"];
$query=mysqli_query($conn,"select * from requests where id=$id");
$rowcount=mysqli_num_rows($query);
?>
<table>
<tr>
<td>ID</td>
<td>Full Name</td>
<td>Request Type</td>
<td>Request Description</td>
<td>Status</td>
</tr>
	<?php
	for ($i=1;$i=$rowcount;$i++)
	{
		$row=mysql_fetch_array($query);
	?>
	<tr>
	<td><?php echo $row['ID'] ?></td>
		<td><?php echo $row['fullName'] ?></td>
		<td><?php echo $row['RequestType'] ?></td>
		<td><?php echo $row['requestDescription'] ?></td>
		<td><?php echo $row['Status'] ?></td>
	</tr>
	<?php
	}
	?>
</table>
