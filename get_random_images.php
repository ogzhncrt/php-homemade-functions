<?php 
    
    /**
     * This function returns an data array that
     * includes image data 
     *
     * @param int $count (needs to be lesser than 30)
     *
     * @author ogzhncrt
     * @return Array images
     * NOT WORKING !!! WILL BE FIX SOON
     */ 

    function get_random_images($count = 10){
        // From URL to get webpage contents.
        $url = "https://picsum.photos/v2/list?limit=10";
         
        // Initialize a CURL session.
        $ch = curl_init();
         
        // Return Page contents.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         
        //grab URL and pass it to the variable.
        curl_setopt($ch, CURLOPT_URL, $url);
         
        $result = curl_exec($ch);
         
        var_dump($result);
    }

?>