<?php 

/**
 * This function checks if there is a duplicate 
 * element in the array.
 *
 * @param array $array 
 *
 * @author ogzhncrt
 * @return boolean
 *
 */ 

function has_dublicate($array) {
	$count        = count($array);
    $unique_count = count(array_unique($array));

    if($count > $unique_count)
        return TRUE;

    return FALSE;
}


?>