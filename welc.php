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
$query = mysqli_query($conn,"SELECT * FROM user WHERE username='$user'");
//$rowcount=mysql_num_rows($query);
if (!$query) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
$row=mysqli_fetch_array($query);
//$id=$row['ID'];
if(isset($_REQUEST["submit"]))
{
		$fullName=$_POST['fullName'];
	$RequestType=$_POST['RequestType'];
	$Descrpt=$_POST['Descrpt'];
	$status=$_POST['stati'];
$sql="INSERT INTO requests (fullName,RequestType,requestDescription,Status) VALUES ('$fullName','$RequestType','$Descrpt','$status')";
	//mysqli_query($sql,"registration");
}

?>
<form method="post" action="welc.php">
	<table>
	<tr>
	<td>Full Name</td>	
	<td><input type="text" name="fullName" id="fname"></td>	
	</tr>
	<tr>
	<td>Request Type</td>
	<td><select id="selectField" name="RequestType">
    <option value="General" selected>General</option>
    <option value="Maintenance">Maintenance</option>
    <option value="Repair">Repair</option>
</select></td>	
	</tr>
	<tr>
	<td>Request Despription</td>
	<td><textarea name="Descrpt" id="desc">your description</textarea></td>	
	</tr>
	<tr>
	<td>Status</td>
	<td><select id="selectField" name="stati">
    <option value="pending" selected>Pending</option>
    <option value="approved">Approved</option>
    <option value="rejected">Rejected</option>
		<option value="complete">Complete</option>
		</select></td>	
	</tr>
	<tr>
	<td align="right"><button type="submit" name="submit">Add</button></td>
	</tr>	
	</table>
</form>
<a href="post.php">view post</a>
        