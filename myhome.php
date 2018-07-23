<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
 <header class="header">
        <h1>Maintenance Tracker App</h1>
    </header>
	<title>Maintenance Tracker System.</title>
	 <link rel="stylesheet" type="text/css" href="assets/css/maintenance.css">
	 <nav class="hd2">
         <h2 class="header" align="left">HOME PAGE</h2>
        <a href="index.html">ABOUT</a>
        <a href="index.html?logout='1'">SIGN OUT</a>
        <a href="viewTable.php">VIEW ALL REQUESTS</a>
		 <a href="">VIEW MY REQUESTS</a>
        
    </nav>
</head>
<body>
<div>
	
</div>
	<div class="content">
    <?php if(isset($_SESSION['success'])):?>
        <div class="error success">
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
        </div>
        <?php endif ?>
        <?php if(isset($_SESSION["username"])):?>
        <p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>
        <p><a href="index.php?logout='1'" style="color:red;">Logout</a></p>
        <?php endif ?>
		
    </div>
     <h2 align="center">Fill the form below to make your request.</h2>
  	
  	<form action="insert.php" method="post"> 
    <div class="tab-2">
  		 Full Name:&nbsp&nbsp&nbsp<input type="text" name="fullName" id="fname"><br><br>
        Request Type:&nbsp&nbsp&nbsp<select id="selectField" name="RequestType">
    <option value="General" selected>General</option>
    <option value="Maintenance">Maintenance</option>
    <option value="Repair">Repair</option>
</select>
        <br><br>
      
       Request Despription:&nbsp&nbsp&nbsp<textarea name="Descrpt" id="desc">your description</textarea><br><br>
		Status:&nbsp&nbsp&nbsp<select id="selectField" name="stati">
    <option value="pending" selected>Pending</option>
    <option value="approved">Approved</option>
    <option value="rejected">Rejected</option>
		<option value="complete">Complete</option>
</select><br><br>
		<button type="submit">Add</button>
        
  	
</div>
</form>
</body>
</html>