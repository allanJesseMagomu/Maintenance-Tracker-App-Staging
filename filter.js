
$(document).ready(function () {
	function addRemoveClass(theRows) {
		theRows.removeClass("odd even");
		theRows.filter(":odd").addClass("odd");
		theRows.filter(":even").addClass("even");
	}
	var rows = $("table#myTable tr:not(:first-child)");

	addRemoveClass(rows);
	$("#selectField").on("change", function () {
		var selected = this.value;
		if (selected !== "ALL") {
			rows.filter("[position=" + selected + "]").show();
			rows.not("[position=" + selected + "]").hide();
		var visibleRows = rows.filter("[position=" + selected + "]");
			addRemoveClass(visibleRows);
		} else {
			rows.show();
			addRemoveClass(rows);
		}
	});

});

//SELECTING AND EDITING TABLE ROWS.
  	var rIndex,
  	table=document.getElementById("myTable");

    	
    function selectRowToInput() {
    		var rIndex,
  	table=document.getElementById("myTable");
    	
    	for (var i = 1; i < table.rows.length; i++) {
    		table.rows[i].onclick=function()
    		{
    			//get the selected row index
    			rIndex=this.rowIndex;
    			document.getElementById("nam").value=this.cells[0].innerHTML;
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

