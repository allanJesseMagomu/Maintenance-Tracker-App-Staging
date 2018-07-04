  
  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  	<meta charset="utf-8">
  	<link rel="stylesheet" type="text/css" href="assets/css/maintenance.css">
  	<script>
  	var rIndex,
  	table=document.getElementById("table");

    function addHtmlTableRow() {
    	// get the table id
    	var rIndex,
  	table=document.getElementById("table"),
    	newRow=table.insertRow(table.length),
    	cell1=newRow.insertCell(0),
    	cell2=newRow.insertCell(1),
    	cell3=newRow.insertCell(2),
    	cell4=newRow.insertCell(3),
    	fname=document.getElementById("fname").value,
    	lname=document.getElementById("lname").value,
    	age=document.getElementById("age").value,
    	desc=document.getElementById("desc").value;

    	cell1.innerHTML=fname;
    	cell2.innerHTML=lname;
    	cell3.innerHTML=age;
    	cell4.innerHTML=desc;
    	selectRowToInput();
    	
    }

    function selectRowToInput() {
    		var rIndex,
  	table=document.getElementById("table");
    	
    	for (var i = 1; i < table.rows.length; i++) {
    		table.rows[i].onclick=function()
    		{
    			//get the selected row index
    			rIndex=this.rowIndex;
    			document.getElementById("fname").value=this.cells[0].innerHTML;
    			document.getElementById("lname").value=this.cells[1].innerHTML;
    			document.getElementById("age").value=this.cells[2].innerHTML;
    			document.getElementById("desc").value=this.cells[3].innerHTML;
    		};
    	}
    }
    selectRowToInput();

    function editTableRow() {
    		var rIndex,
  	table=document.getElementById("table");
    	
    	var fname=document.getElementById("fname").value,
	    	lname=document.getElementById("lname").value,
	    	age=document.getElementById("age").value,
	    	desc=document.getElementById("desc").value;

	    	table.rows[rIndex].cells[0].innerHTML=fname;
	    	table.rows[rIndex].cells[1].innerHTML=lname;
	    	table.rows[rIndex].cells[2].innerHTML=age;
	    	table.rows[rIndex].cells[3].innerHTML=desc;

    }
    function removeSelectedRow(){
    			var rIndex,
  	table=document.getElementById("table");

    	table.deleteRow(rIndex);
    	//clear input text
    	document.getElementById("fname").value="";
    	document.getElementById("lname").value="";
    	document.getElementById("age").value="";
    	document.getElementById("desc").value="";
    }
  </script>
  <header class="header">
        <h1>Maintenance App Tracker</h1>
    </header>
  <nav class="hd2">
        <a href="index.html">ABOUT</a>
        <a href="login.html">SIGN OUT</a>
        <a href="viewTable.html">VIEW MY REQUESTS</a>
    </nav>
  </head>
  <body>
  
         <marquee><b>View your requests in the table on the right.</b></marquee>
 

  
<h2 align="">Fill the form below to make your request.</h2>
  	
  	<form action="insert.php" method="post"> 
    <div class="tab-2">
  		 Full Name:&nbsp&nbsp&nbsp<input type="text" name="fullName" id="fname"><br><br>
        Request Type&nbsp&nbsp&nbsp<select class="req">
        <option></option>
        <option></option>
        <option></option>
        </select>
        <br><br>
      
       Request Despription:&nbsp&nbsp&nbsp<textarea name="Descrpt" id="desc">your description</textarea><br><br>

        <input type="submit" value="Add">
        <button onclick="editTableRow();">Edit</button>
        <button onclick="removeSelectedRow();">Remove</button>
  	
</div>
</form>

    
  </body>
  </html>
  