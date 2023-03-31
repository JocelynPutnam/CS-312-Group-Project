<!DOCTYPE html>
<html>
<body>

your collumn/row number is <?php echo $_POST["row"]; ?><br>
your color number is <?php echo $_POST["color"]; ?><br>

<?php 
$colors = $_POST["color"]; 
$rows = $_POST["row"];
?>

<script type="text/javascript">
var colors = <?php echo $colors ?>;
var rows = <?php echo $rows ?>;

var abc = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

var number1 = document.createElement("TABLE");



</script>

</body>
</html>
