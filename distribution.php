<?php 
	
	function distribution($units,$color = "#F00"){
		$sum     = array_sum($units);
		$highest = max($units);

		echo $highest;
		echo "<br>";
		echo $sum;
	}



	distribution(
		array(11,23,42,52,412)

	);

?>