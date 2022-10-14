<?php
    
    /**
     * This function calculates seconds in
     * different type of strings
     *
     * @param String $value
     *
     * @return String $seconds
     *
     */ 
    function to_seconds($value){
        /* 
            TYPES ==
            12:32:12
            00:32:31
            32:31
            1:33
            34 (only minutes)

        */

        return $value;
    }
?>

<?php echo to_seconds('12:33:31'); ?>
