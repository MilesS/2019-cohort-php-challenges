<?php
    $animals = ['Dogs', 'Cats', 'Tigers', 'Bears'];

    // Designed for Arrays
    foreach ($animals as $animal ) {  
        echo '<p>I love ' . $animal . '</p>';
    }

    // Designed For Counting
    for ($i = 0; $i < count($animals); $i++ ) {
        echo '<p>I Really LOVE ' . $animals[$i] . '</p>'; 
    }

    // To see if it meets a condition
    $i = 0;
    while ( $i < count($animals) ) {
        echo '<p>I Really REALLY REALLY LOVE ' . $animals[$i] . '</p>'; 
        $i++;
    }

    $candies = [
        'kitkat' => [
            'Name' => 'Kit-Kat Bar',
            'Price' => 2.00,
        ],
        'snickers' => [
            'Name' => 'Snickers',
            'Price' => 1.25
        ]
    ];

    foreach ( $candies as $candy ) {
        foreach ( $candy as $key=>$item) {
            echo $key . ' ' . $item;
        }
    }