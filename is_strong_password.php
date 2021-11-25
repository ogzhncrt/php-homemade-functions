<?php 



function is_strong_password($password = ""){
    if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)){
        return TRUE;
    }
    return FALSE;
}

?>