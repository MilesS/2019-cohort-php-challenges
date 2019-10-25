<?php
    $drinks = ['Coffee', 'Water', 'AMF'];

    foreach ($drinks as $drink) {
        echo '<p>I like drinking' . $drink . '</p>';
    }

    $foods = [
        [
            'Name' => 'Apple',
            'Price' => 2.00,
            'Location' => 'WinCo'
        ],
        [
            'Name' => 'Double Double',
            'Price' => 5.10,
            'Location' => 'In&Out'
        ]
    ];
    echo '<pre>';
    print_r($foods);
    echo '</pre>';

    foreach ($foods as $food) {
        $tax = number_format(round($food['Price'] * 0.0795, 2), 2);
        $total = number_format($food['Price'] + $tax, 2);
        $price = number_format($food['Price'], 2); 
        $name = $food['Name'];
        $location = $food['Location'];

        echo '<p>Name: ' . $name. '</p>';
        echo '<p>Price: ' . $price . '</p>';
        echo '<p>Tax: ' . $tax . '</p>';
        echo '<p>Total: ' . $total . '</p>';

        if ($food['Price'] >= 5) {
            echo "<p>Free Shipping</p>";
        }

        echo '<p>Location: ' . $location . '</p>';
      
        foreach ($food as $key=>$item) {
            echo "<p>$key:  $item</p>";

            if ( $key == 'Price' ) {
                $tax = number_format($item * 0.0795, 2);
                $total = $item + $tax;

                echo '<p>Tax: ' . $tax . '</p>';
                echo '<p>Total: ' . $total . '</p>';
            }
            
            if ( $key == 'Price' && $item >= 5 ) {
                echo "Free Shipping";
            }
        }
    }