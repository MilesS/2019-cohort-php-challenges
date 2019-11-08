<?php
    function printString ( $content, $tag = 'p', $class) {
        if( isset($class) ) 
            $class = ' class="'. $class . '"';
        echo '<'. $tag . $class . '>' . $content . '</' . $tag . '>';
    }

    function taxes( $price ) {
        return number_format($price * 0.0825, 2);
    }

    function shippingCosts( $weightInPounds ) {
        // Take weight in lbs * 16 oz
        $weightInOunces = $weightInPounds * 16;

        return number_format( $weightInOunces * 0.15, 2);
    }

    $products = [
        'lgpizza' => [
            'name' => 'Large Pizza',
            'price' => 18,
            'weight' => 3,
        ],
        'smpizza' => [
            'name' => 'Small Pizza',
            'price' => 10,
            'weight' => 1,
        ],
        'shoes' => [
            'name' => 'Shoes',
            'price' => 55,
            'weight' => 1,
        ],
        'socks' => [
            'name' => 'Socks',
            'price' => 9,
            'weight' => 0.1,
        ],
    ];

    // Challenge #2
    foreach($products as $sku=>$product) {
        printString('Sku is ' . $sku, 'h2');
        foreach ($product as $key=>$productInfo) {
            printString($key . ': ' . $productInfo);
        }
    }

    // Challenge #3
    $cart = ['lgpizza', 'socks'];

    // Challenge #4
    printString('My Cart', 'h2');

    //HINT $products['shoes']
    $totalShipping = 0;
    $totalTaxes = 0; 
    $totalPrice = 0;

    foreach ($cart as $productSku) {

    // Single Product Information
       $product = $products[$productSku];
       $name = $product['name'];
       $price = $product['price'];
       $tax = taxes($product['price']);
       $shippingWeight = $product['weight'];
       $shippingCost = shippingCosts($product['weight']);
    
    // Update Cart Prices
        $totalShipping = $totalShipping + $shippingCost;
        $totalPrice = $totalPrice + $price;
        $totalTaxes = $totalTaxes + $tax;

       printString($name, 'h3');
       printString('Cost: $'. $price);
       printString('Taxes: $'. $tax);
       printString('Shipping Weight: '. $shippingWeight);
       printString('Shipping Costs: $'. $shippingCost);
    }

    $grandTotal = $totalShipping + $totalPrice + $totalTaxes;
    
    printString($totalPrice);
    printString($totalTaxes);
    printString($totalShipping);
    printString('Grand Total: $' . $grandTotal );