<!DOCTYPE html>
<html>
<body>

<header>
		<table>
			<td><?php echo Asset::img('Logo.img.png'); ?></td>
			<td><h1>Color Coordinate Generation Page</h1></td>
		</table>
</header>

<br>
<a href="./index">Go Back to Home</a>
<br>
<h2>Your two tables:</h2>
<br>

<style>
	#table-1 {
		width: 100%
	}
	#table-1 td {
		height: 30px;
	}
	#table-1 td:first-child {
		width: 20%;
	}
	#table-2 {
		text-align: center;
		margin: auto;
	}
	#table-2 td {
		table-layout: fixed;
		overflow: hidden;
		width: 90px;
		height: 90px;
	}
	.red {
		background-color: red;
    }
	.black {
		background-color: black;
	}
	.blue {
		background-color: blue;
	}
	.yellow {
		background-color: yellow;
	}
	.green {
		background-color: green;
	}
	.purple {
		background-color: purple;
	}
	.orange {
		background-color: orange;
	}
	.teal {
		background-color: teal;
	}
	.brown {
		background-color: brown;
	}
	.grey {
		background-color: grey;
	}
	.table-1 input { 
		width: 100%;
		height: 100%;
		display: block;
	}
	input {
		width: 20%;
		height: 30px;
		margin: auto;
	}
	.selected {
		outline: 5px solid magenta;
	}

</style>

<?php 
//session_start();
$colors = $_POST["color"]; 
$rows = $_POST["row"];
$_SESSION["colors"] = $colors;
$_SESSION["rows"] = $rows;
?>

<table id="table-1" class="table-1">
</table>
<br>
<table id="table-2">
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
var colors = <?php echo $colors ?>;
var rows = <?php echo $rows ?>;
var color = 'red';

var abc = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
var clrs = ["red", "orange", "yellow", "green", "blue", "purple", "grey", "brown", "black", "teal"];
let span = document.createElement("span");
span.innerHTML = "&nbsp;";

function createTable1(tableID) {
 
  const colorsUsed = [];

  //Checks if color is in use
  function colorCheck(event) {
    const selectedColor = event.target.value;
    const selectedIndex = event.target.dataset.index;

    // Check if the selected color is already in use by another select box
    for (let i = 0; i < colorsUsed.length; i++) {
      if (i !== parseInt(selectedIndex) && colorsUsed[i] === selectedColor) {
        
        event.target.value = colorsUsed[selectedIndex];

        // Change the select box text color to red for 2 seconds if in use
        event.target.style.color = 'red';
        setTimeout(() => {
          event.target.style.color = '';
        }, 2000);
        return;
      }
    }

    // Update colorUsed to new color
    colorsUsed[selectedIndex] = selectedColor;
  }

  for (let i = 0; i < colors; i++) {
    let tableRef = document.getElementById(tableID);

    let newRow = tableRef.insertRow(-1);

    let newCell = newRow.insertCell(0);
    let newCell2 = newRow.insertCell(1);
    
    //radio buttons
	let input = document.createElement('input');
	input.setAttribute("type", "radio");
	input.setAttribute("name", "radioButton");
	

	let currentColor;

    // Create the select box for the color
    let colorBox = document.createElement('select');
    colorBox.dataset.index = i;
    colorBox.addEventListener('change', colorCheck);
    //Loop through colors - saves index and color 
    for (const [index, color] of clrs.entries()) {
      let option = document.createElement('option');
      option.value = color;
      option.text = color;
      if (index === i) {
        option.selected = true;
        console.log(color);
        currentColor = color;
      }
      colorBox.add(option);
    }
    
    newCell.appendChild(colorBox);
	newCell2.appendChild(input);
	newCell2.style.backgroundColor = currentColor;


    colorsUsed[i] = clrs[i];
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

//document readys on launch to react to future events
$(document).ready(function(){

//function that colors cell of table-2 based on click event
$('#table-2').find('td').click( function(){
  //variables for position of cell and cells current class attributes
  var pos = $(this).index();
  var cn = $(this).attr("class");

  if (cn != undefined && cn != '') {
    this.classList.remove(color);
  }
  else {
    this.className=color;
  }

});

});

//creates tables made from previous functions
createTable1("table-1");
createTable2("table-2");


</script>

<br>
<br>
<form action="./three.php" method="post">
  <input type="hidden" name="color" value="colors">
  <input type="hidden" name="row" value="rows">
  <input type="submit" value="Print">
</form>

</body>
</html>


<script>
	//Radio buttons change color according to dropdown
	$("td").click(function(){
	});
	
	$('select').on('change', function() {
		let newColor = $(this).val();
		$(this).closest("td").next("td").css("background-color", newColor);
	});
	
	$("input:radio").click(function() {
		$("#table-1 input").removeClass("selected");
		$(this).addClass("selected");
	});
</script>
