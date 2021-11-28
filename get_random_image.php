<?php
    
    function get_random_image($width,$height,$crop_gravity = FALSE, $grayscale = FALSE, $blur = FALSE){
        $request_url = "https://unsplash.it/";
        if($grayscale){
            $request_url .= "g/";
        }
        $request_url .= $width."/".$height."/?random";
        if($crop_gravity != FALSE) {
            $request_url .= "&gravity=".$crop_gravity;
        }
        if($blur != FALSE) {
            $request_url .= "&blur";
        }
        return $request_url;
    }


?>

<img src="<?php echo get_random_image(400,400); ?>" alt="">