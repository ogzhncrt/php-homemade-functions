<?php 
	
	function distribution($units){
		$color = "#F00";

		$sum     = array_sum($units);
		$highest = max($units);

		echo $highest;
		echo "<br>";
		echo $sum;
		echo "<br>";
		echo "<br>";



		foreach ($units as $key => $unit) {
			if($unit == $highest){
				$units[$key] = $color;
			}
			else{
				$lighter_ratio = (100-round($unit*100/$highest));
				$as_color      = dechex(floor(16*$lighter_ratio/100));

				echo "%".$lighter_ratio." > ".$as_color."<br>";




			}
		}
	}



	distribution(
		array(0=>11,1=>23,2=>42,3=>152,4=>412)

	);

?>