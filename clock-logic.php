
<?php

    $time = (int)date('G');
    
    if($time >= 5 && $time < 11)
        $daylight = 'php-morning';
    else if($time >= 11 && $time < 16)
        $daylight = 'php-afternoon';
    else if($time >= 16 && $time < 20)
        $daylight = 'php-evening';
    else if($time >= 20 && $time < 5)
        $daylight = 'php-night';    
    
?>