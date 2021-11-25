<?php 

/**
 * This function checks the password is strong
 * or not. If it is not will return FALSE;
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