<?php
    date_default_timezone_set("America/New_York");
    echo '<html en="lang-us"';
    echo '<head>';
    echo '<meta charset=utf-8>';
    echo '</head>';
    echo '<body>';
    $timeOfDay = localtime();

    if($timeOfDay[2] >= 21){
        echo "<h1>Good night! The time is " . $timeOfDay[2] - 12 . " PM!</h1>";
    }

    if($timeOfDay[2] <= 5){
        echo "<h1>Good night! The time is " . $timeOfDay[2] . " AM!</h1>";
    }
    
    if($timeOfDay[2] > 5 && $timeOfDay[2] < 12){
        echo "<h1>Good morning! The time is " . $timeOfDay[2] . " AM!</h1>";
    }

    if($timeOfDay[2] >= 12 && $timeOfDay[2] <= 18){
        echo "<h1>Good afternoon! The time is " . $timeOfDay[2] - 12 . " PM!</h1>";
    }

    if($timeOfDay[2] >= 18 && $timeOfDay[2] < 21) {
        echo "<h1>Good evening! The time is " . $timeOfDay[2] - 12 . " PM!</h1>";
    }

    echo '</body>';
    echo '</html>';
?>