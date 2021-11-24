<?php 

/**
 * A prime number is a number which has exactly two distinct number 
 * divisors: 1 and itself. So if you take the number 11, it can only 
 * be divided to get a whole number if it is divided by 1 or 11. 
 * If any other number is used then a fraction is always found.
 *
 * @param integer $number is_pr
 * 
 *
 * @author ogzhncrt
 * @return boolean
 *
 */ 

function is_prime($number) {
	// 1 is not a prime number
	if($number == 1) {
        return false;
    }

    // 2 is the only even prime number
    if ($number == 2) {
        return true;
    }

    $number = floor(sqrt($number));
    
	for($i = 2; $i <= $number; $i++) {
		if($number % $i == 0) {
			break;
		}
    }
  	
  	return $number == $i-1 ? TRUE : FALSE;
}


?>