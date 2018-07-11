  <?php include('server.php');?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  	<meta charset="utf-8">
  	<link rel="stylesheet" type="text/css" href="assets/css/maintenance.css">
  	
  <header class="header">
        <h1>Maintenance Tracker App</h1>
    </header>
  <nav class="hd2">
        <a href="index.html">ABOUT</a>
        <a href="login.php">SIGN OUT</a>
        <a href="viewTable.php">VIEW MY REQUESTS</a>
    </nav>
  </head>
  <body>
  
         <marquee><b>View your requests in the table on the right.</b></marquee>
 

  
<h2 align="">Fill the form below to make your request.</h2>
  	
  	<form action="insert.php" method="post"> 
    <div class="tab-2">
  		 Full Name:&nbsp&nbsp&nbsp<input type="text" name="fullName" id="fname"><br><br>
        Request Type:&nbsp&nbsp&nbsp<select id="selectField" name="RequestType">
    <option value="gen" selected>General</option>
    <option value="Maintenance">Maintenance</option>
    <option value="Repair">Repair</option>
</select>
        <br><br>
      
       Request Despription:&nbsp&nbsp&nbsp<textarea name="Descrpt" id="desc">your description</textarea><br><br>

        <input type="submit" value="Add" class="butt">
		<button type="submit">Add</button>
        <button onclick="editTableRow();">Edit</button>
        <button onclick="removeSelectedRow();">Remove</button>
  	
</div>
</form>

    
  </body>
  </html>
  