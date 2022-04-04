<?php
    $mymarks["Internet Systems Development"] = 63;
    $mymarks["Programming 1"] = 60;
    $mymarks["Programming 2"] = 60;
    $mymarks["OOAD"] = 60;
    $mymarks["Software Engineering"] = 50;
    $mymarks["Web Dev"] = 75;
    $total = 0;

    foreach($mymarks as $index => $value)
    {
        echo "for $index my grade was $value <br/>";
        $total = $total + $mymarks[$index];
    }

   
    $average = $total / 6;
    echo "Your average grade is $average";

?>