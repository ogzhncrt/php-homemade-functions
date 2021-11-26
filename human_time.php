<?php 
    /**
     * human_time function converts timestamp
     * to human readable format like; "3 years ago"
     * or one hour ago. You have send timestamp to get
     * result.
     *
     * @param timestamp $time
     *
     * @author ogzhncrt
     * @return string
     *
     */ 
    function human_time($time){
        $time = time() - $time; // to get the time since that moment

        $tokens = array (
            31536000 => 'year',
            2592000 => 'month',
            604800 => 'week',
            86400 => 'day',
            3600 => 'hour',
            60 => 'minute',
            1 => 'second'
        );

        foreach ($tokens as $unit => $text) {
            if ($time < $unit)
                continue;

            $number_of_units = floor($time / $unit);
            return $number_of_units.' '.$text.(($number_of_units > 1)?'s':'').' ago';
        }
    }

?>