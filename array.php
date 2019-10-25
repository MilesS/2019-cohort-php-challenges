<?php 

    function getTaxes( $amount ) {
        $rate = 0.0725;

        return number_format($rate * $amount, 2);
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

    $total = 0;
    $totalShipping = 0;
    foreach ( $cart as $product ) {
        echo '<p>' . $product['Title'] . ' costs $' .$product['Cost'] . '</p>';
        echo "<p>Product shipping costs $" . getShipping($product['Cost']) . "</p>";
       
        // Add numbers together after every loop
        $total = $total + $product['Cost'];
        $totalShipping = $totalShipping + getShipping($product['Cost']);
        
    }

    echo '<p> $' . $total . '</p>';
    echo '<p>Taxes $' . getTaxes($total) . '</p>';
    echo '<p>Shipping $' . $totalShipping . '</p>';
    echo '<p>Total Amount $' . ( $total + $totalShipping + getTaxes($total) )  . '</p>';
   // echo '<p> Taxes $' . number_format(($total * 0.0725), 2) . '</p>';

   ?>
