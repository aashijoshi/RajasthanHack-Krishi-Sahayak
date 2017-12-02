<?php
	$seed = $_POST['typeofmaize']; 
	$fertilizer =$_POST['typeoffertilizer'];
	$length = $_POST['length'];
	$result1 = $length*($seed/0.404686);
	$result2 = $length*($fertilizer/0.404686);

?>

<html>

<body>
		<table>
			<tr>
				<td>
					<h3>the amount of seed required <?php echo $result1 ?> kg/ha</h3>
					<h3>the amount of pesticide <?php echo $result2 ?>pounds/hec</h3>
				</td>
			<tr>
		</table>
		
</body>
</html>