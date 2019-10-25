<?php   

    function getTaxes( $amount ) {
        $rate = 0.08;
        return number_format($amount * $rate, 2);
    }

    function getShipping( $amount ) {
        if ( $amount <= 15 ) {
            $shipping = 7;
        } else {
            $shipping = 0;
        }

        return number_format($shipping, 2);
    }

    $cart = [
        [
            'Name' => 'Shoes',
            'Cost' => 40.00
        ],
        [
            'Name' => 'Hat',
            'Cost' => 15.00
        ],
        [
            'Name' => 'Pencils',
            'Cost' => 2.00
        ]
    ];

    $total = 0; 
    $shippingTotal = 0;
    foreach ( $cart as $product ) {
        echo 'Product' . $prodct['Name'] . ' costs ' . $product['Cost']; 
        $total = $total + $product['Cost']; 

        $shippingTotal = $shippingTotal + getShipping( $product['Cost'] );
    }
    $taxesTotal = getTaxes($total);

    echo '<p>Total: ' . $total . '</p>'; 
    echo '<p>Tax: ' . $taxesTotal . '</p>'; 
    echo '<p>Shipping: ' . $shippingTotal . '</p>'; 
    echo "<p>Complete Amount:" . ($total + $taxesTotal + $shippingTotal) . "</p>";
