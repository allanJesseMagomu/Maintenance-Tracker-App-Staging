<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
 <header class="header">
        <h1>Maintenance Tracker App</h1>
    </header>
	<title>Maintenance Tracker System.</title>
	 <link rel="stylesheet" type="text/css" href="c.css">
	 <nav class="hd2">
         <h2 class="header" align="left">HOME PAGE</h2>
        <a href="index.html">ABOUT</a>
        <a href="index.html?logout='1'">SIGN OUT</a>
        <a href="viewTable.php">VIEW ALL REQUESTS</a>
		 <a href="post.php">VIEW MY REQUESTS</a>
        
    </nav>
</head>
<body>
<div>
	
</div>
	
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
        <p> <h3  style="color:white;"> <marquee>Welcome <strong> <?php echo $_SESSION['username']; ?> </marquee></strong></h3> </p>
        <p><a href="index.html?logout='1'" style="color:white;">Logout</a></p>
        <?php endif ?>
		
    
  	<form action="insert.php" method="post"> 
    <h2 align="center">Fill the form below to make your request.</h2>
        <p>
  		 <label class="floatLabel">Device Name</label>
         <input type="text" name="fullName" id="fname">
         </p>
         <p>
        <label class="floatLabel">Request Type</label>
        <select id="selectField" name="RequestType">
    <option value="General" selected>General</option>
    <option value="Maintenance">Maintenance</option>
    <option value="Repair">Repair</option>
</select>
</p>
       <p> 
       <label class="floatLabel">Request Despription</label><textarea name="Descrpt" id="desc">your description</textarea>
       </p>
       <p>
		<label class="floatLabel">Status</label><select id="selectField" name="stati">
    <option value="pending" selected>Pending</option>
    <option value="approved">Approved</option>
    <option value="rejected">Rejected</option>
		<option value="complete">Complete</option>
</select>
        </p>
        <input type="submit" value="Add" id="submit" name="submit">
        
  	
</div>
</form>
</body>
</html>