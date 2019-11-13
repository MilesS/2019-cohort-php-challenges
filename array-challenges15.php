<?php
    // From https://docs.google.com/document/d/1DeJuzOBj_dixXFKcqRDEJXExe56lpxToMXHpQzvtHsU/edit?usp=sharing

    // Challenge 1
    function printString( $content, $tag = 'p', $class = null) {
        if( isset( $class ) ) $class = ' class="'. $class .' "';
        echo '<'. $tag . $class . '>' . $content . '</' . $tag . '>';
    }

    // Challenge 3
    function taxes( $price ) {
        return number_format( $price * 0.0825, 2);
    }

    // Challenge 4
    function shippingCosts( $weightInPounds ) {
        $weightInOunces = $weightInPounds * 16;

        return number_format($weightInOunces * 0.15, 2);
    }

    // Challenge 2
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
        'socks2' => [
            'name' => 'Socks',
            'price' => 10,
            'weight' => 0.3,
        ],
    ];

    $totalPrice = 0;
    $totalShipping = 0;
    $totalTaxes = 0;
    foreach($products as $sku=>$product) {
        // Set Variable Names
        $name = $product['name'];
        $price = $product['price'];
        $weight = $product['weight'];
        $tax = taxes( $product['price'] );
        $shippingCosts = shippingCosts( $product['weight'] );

        // Add to Totals
        $totalPrice = $totalPrice + $price;
        $totalShipping = $totalShipping + $shippingCosts;
        $totalTaxes = $totalTaxes + $tax;
        
        // Display Product Information
        printString('Sku is: ' . $sku, 'h2');
        printString('Name is: ' . $name);
        printString('Price is: ' . $price);
        printString('Weight is: ' . $weight);
        printString('Tax is: ' . $tax);
        printString('Shipping is: ' . $shippingCosts);
    }

    // Display Total Cart
    $finalAmount = $totalPrice + $totalTaxes + $totalShipping;

    printString('Total Price: ' . $totalPrice);
    printString('Total Tax: ' . $totalTaxes);
    printString('Total Shipping: ' . $totalShipping);
    printString('Final Amount: ' . $finalAmount);

    // Challenge 6
?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ; ?>" method="post">
        <input type="text" name="search" id="search" value="<?php echo htmlspecialchars( $_POST['search']); ?>">
        <input type="submit" value="submit">
    </form>

<?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
        $searchTerm = htmlspecialchars(  strip_tags ( $_POST['search'] ) );
        
        $productsReturned = array_filter(
            $products,
            function ($item) use ($searchTerm) {
                return $item['name'] === $searchTerm;
            } 
        );  
        
        foreach($productsReturned as $product) {
            foreach($product as $key=>$item) {
                printString($key . ': ' . $item);
            }
        }
    }