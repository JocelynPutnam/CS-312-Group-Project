<!DOCTYPE html>
<html>

<body>
	
	<header>
		<table>
			<td><?php echo Asset::img('Logo.img.png'); ?></td>
			<td><h1>Generated Color Printview</h1></td>
		</table>
	</header>

<?php
session_start();
$colors = $_SESSION["colors"];
$rows = $_SESSION["rows"];
?>


<main>
	
<br>
<h2>Your two tables:</h2>
<br>
<br>

<table id="table-1">
</table>
<br>
<table id="table-2">
</table>

<script type="text/javascript">

var colors = <?php echo $colors ?>;
var rows = <?php echo $rows ?>;

var abc = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
var clrs = ["red", "orange", "yellow", "green", "blue", "purple", "grey", "brown", "black", "teal"];
let span = document.createElement("span");
span.innerHTML = "&nbsp;";

//var number1 = document.createElement("TABLE");

function createTable1(tableID) {
  for (let i = 0; i < colors; i++) {
  
    let tableRef = document.getElementById(tableID);
  
    
    let newRow = tableRef.insertRow(-1);
  
    
    let newCell = newRow.insertCell(0);
    let newCell2 = newRow.insertCell(1);
  
    
    let newText = document.createTextNode(clrs[i]);
    //let newText2 = document.createTextNode(" ");
    newCell.appendChild(newText);
    newCell2.appendChild(span);
  }
}

function createTable2(tableID) {
  for (let i = 0; i < rows + 1; i++) {
    if (i == 0) {
      let tableRef = document.getElementById(tableID);
      
      let newRow = tableRef.insertRow(-1);
      
      for (let j = 0; j < rows + 1; j++) {
        if (j == 0) {
          let newCell = newRow.insertCell(0);
          newCell.appendChild(span);
        }
        else {
          let newCell = newRow.insertCell(j);
          let newText = document.createTextNode(abc[j-1]);
          newCell.appendChild(newText);
        }
      }
      
    }
    else {
      let tableRef = document.getElementById(tableID);
      
      let newRow = tableRef.insertRow(-1);
      
      for (let k = 0; k < rows + 1; k++) {
        if (k == 0) {
          let newCell = newRow.insertCell(0);
          let newText = document.createTextNode(i);
          newCell.appendChild(newText);
        }
        else {
          let newCell = newRow.insertCell(k);
          newCell.appendChild(span);
        }
      }
      
    }
   }
  
}



createTable1("table-1");
createTable2("table-2");


</script>
</main>

</body>

</html>