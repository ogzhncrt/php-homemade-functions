<?php 



function _IS_STRONG_PASSWORD($password = ""){
    if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)){
        return TRUE;
    }
    return FALSE;
}

?>