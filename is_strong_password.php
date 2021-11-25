<?php 

/**
 * A prime number is a number which has exactly two distinct number 
 * divisors: 1 and itself. So if you take the number 11, it can only 
 * be divided to get a whole number if it is divided by 1 or 11. 
 * If any other number is used then a fraction is always found.
 *
 * @param string $password
 * 
 *
 * @author ogzhncrt
 * @return boolean
 *
 */ 

function is_strong_password($password = ""){
    if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)){
        return TRUE;
    }
    return FALSE;
}

?>