<?php
    // Challenge #1
    function printString( $content, $tag = 'p' ) {
        echo '<'. $tag . '>' . $content . '</'. $tag . '>';
    }

    // Challenge #2
    $openAmounts = [-10, 100, 98, -23, -78];

    $transactions = [
        'deposits' => [],
        'withdrawls' => []
    ];

    foreach ($openAmounts as $openAmount) {
        if ( $openAmount < 0 ) {
            array_push($transactions['withdrawls'], $openAmount);
        } else {
            array_push($transactions['deposits'], $openAmount);
        }
    }

    echo "<pre>";
    print_r($transactions);
    echo "</pre>";

    echo "<table>";
    echo "<tr>";
    foreach ( $transactions as $key=>$transactionType ) {
        printString( 'These are ' . $key, 'td');
    }
    echo "</tr>";

    echo "<tr>";
        echo "<td>";
            foreach ( $transactions['deposits'] as $transaction ) {
                printString($transaction);
            }
        echo "</td>";
        echo "<td>";
            foreach ( $transactions['withdrawls'] as $transaction ) {
                printString($transaction);
            }
        echo "</td>";
    echo "</tr>";

    echo "</table>";

    echo "<table>";
    $i = 0;
    foreach ( $transactions as $key=>$transactionType ) {
        
        if ($i = 0) 
            echo "<tr>";
            
        echo "<td class='headings'>";        
        printString( 'These are ' . $key, 'h1');
        echo "</td>";

        if ($i = 0) 
            echo "<tr>";

        echo "<tr>";
        echo "<td class='test'>";
        foreach ($transactions[$key] as $transaction) {
            echo $transaction;
        }
        echo "</td>";
        echo "</tr>";
        $i++;
    }
    echo "</table>";