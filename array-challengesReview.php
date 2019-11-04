<?php
    $drinks = ['Pepsi', 'Coke', 'Water', 'Beer'];

    foreach($drinks as $drink) {
        echo 'I like drinking ' . $drink;
    }

    $foods = [
        [ 
            'name' => 'Tacos',
            'price' => 0.99,
            'location' => 'Taco Bell',
            'taxable' => true
        ],
        [ 
            'name' => 'Pizza',
            'price' => 20.30,
            'location' => 'Me & Eds',
            'taxable' => true
        ],
        [ 
            'name' => 'Apple',
            'price' => 4.99,
            'location' => 'Safeway',
            'taxable' => false
        ],
    ];

    $total = 0;
    $tax = 0;
    foreach ($foods as $food) {
        echo $food['name'] . $food['price'] . $food['location'];
        if ( $food['price'] >= 5 ) {
            echo "Get Free Shipping";
        }

        if ($food['taxable'] == true) {
            $tax = ($food['price'] * 0.07975) + $tax; 
        }
        $total = $food['price'] + $total;
    }
    $tax = number_format($tax, 2);
    $finalAmount = number_format($tax + $total, 2);

    echo '<h3>Your Total: ' . $total . '</h3>';
    echo '<h3>Your Tax: ' . $tax . '</h3>';
    echo '<h3>Your Final Amount: ' . $finalAmount . '</h3>';

    foreach ($foods as $food) { 
        foreach($food as $key=>$item) {
            echo "<p>" . $key . ": ". $item . "</p>";
            if($item >= 5) {
                echo "Get free shipping";
            }
         }
    }

    // Concatinating a string that already exists
    $html = "<h1>";
    foreach ($foods as $food) {  
        $html .= $food['name'] . " " ; 
    }
    $html .= "</h1>";
    
    echo $html;

    
