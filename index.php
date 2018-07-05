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
        <a href="viewTable.php">VIEW MY REQUESTS</a>
        <a href="MakeReq.php">MAKE REQUEST</a>
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
     <div class="abt">
    <h1>ABOUT.</h1>
        <h3 class="bt">Maintenance Tracker App is an application that provides users with the ability to reach out to operations or repairs department regarding repair or maintenance requests and monitor the status of their request.</h3></div>
</body>
</html>