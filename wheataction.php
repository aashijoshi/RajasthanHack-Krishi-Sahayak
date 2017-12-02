<?php

	$germination = $_POST['germination']; 
    $establish = $_POST['establishment'];
    $population = $_POST['population'];
    $length = $_POST['length'];
    $activeingredient = $_POST['activeing'];
    $conc = $_POST['conc'];
  	
  	
	$result1 = $length*(($population/$germination)/$establish);
	$result2 = $length*(($activeingredient/$conc)/0.404686);
	
		
	


	
?>
<html>

<body>
		<table style="border : 2px solid;">
			<tr>
				<td>
					<h3>the amount of seed required <?php echo $result1 ?>kg/hec</h3>
					<h3>the amount of pesticide <?php echo $result2 ?>pound/hec</h3>
				</td>
			<tr>
		</table>
		
</body>
</html>