<?php 
    $cart = [
        [
            'Title' => 'Shoes',
            'Cost' => 40.00
        ],
        [
            'Title' => 'Hat',
            'Cost' => 10.00
        ],
        [
            'Title' => 'Pencil',
            'Cost' => 2.00
        ],
    ];

    foreach ( $cart as $product ) {
        echo '<p>' . $product['Title'] . ' costs $' .$product['Cost'] . '</p>';
    }
