<?php
    $bowlingFrames = [
        0, 7, 4, 5, 2, 4, 9, 8, 1, 2
    ];

    $i = 1;
    $total = 0;
    foreach ($bowlingFrames as $frameScore) {
        echo "<p>In frame " . $i . " I scored " . $frameScore . "</p>"; 

       if ( $frameScore % 2 == 0 ) {
           echo "This score is even";
       } else {
           echo "This score is odd.";
       }

        $total = $total + $frameScore;

        echo "Your Current Score" . $total;
        $i++;
    }
    echo "Your Score: ". $total;

    // foreach ($bowlingFrames as $index=>$frameScore) {
    //     echo "<p>In frame " . ($index + 1) . " I scored " . $frameScore . "</p>"; 
    // }