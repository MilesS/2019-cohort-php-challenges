<?php
    // Challenge #1
    function printString( $content, $tag = 'p' ) {
        echo '<'. $tag . '>' . $content . '</'. $tag . '>';
    }

    echo "AAAAAA";

    // Challenge #2
    $openAmounts = [-10, 100, 98, -23, -78];

    $transactions = [
        'deposits' => [],
        'withdrawls' => []
    ];

    foreach ($openAmounts as $openAmount) {
        if ( $openAmount < 0 ) {
            array_push($transactions['deposits'], $openAmount);
        } else {
            array_push($transactions['withdrawls'], $openAmount);
        }
    }

    print_r($transactions);