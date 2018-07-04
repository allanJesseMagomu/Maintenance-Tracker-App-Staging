<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script type="text/javascript">
        $(document).ready(function() {
            function addRemoveClass(theRows) {
                theRows.removeClass("odd even");
                theRows.filter(":odd").addClass("odd");
                theRows.filter(":even").addClass("even");
            }
            var rows=$("table#mytable tr:not(:first-child)");
            addRemoveClass(rows);

            $("$selectField").on("change",function()
        {
                var selected=this.value;
                if(selected!="All");{
                    rows.filter("[position="+selected+"]").show();
                    rows.not("[position="+selected+"]").hide();
                    var visibleRows=rows.filter("[position="+selected+"]");
                    addRemoveClass(visibleRows);
                }else{
                    rows.show();
                    addRemoveClass(rows);
                }
            });
        });
    </script>
	
        <link rel="stylesheet" type="text/css" href="assets/css/maintenance.css">
<header class="header">
        <h1>Maintenance App Tracker</h1>
    </header>
    <nav class="hd2">
        <a href="index.php">ABOUT</a>
        <a href="signup.php">SIGN OUT</a>
        <a href="viewTable.php">VIEW MY REQUESTS</a>
    </nav>
</head>

<body>

	<div class="odiv">
        <div>
    Filter By:<select id="">
    <option value="ALL">ALL</option>
    <option value="User">User</option>
    <option value="Status">Status</option>
    <option value="ID">ID</option>
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
echo "<table align='center'> 
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
		</div>	
	</div>
</body>
</html>