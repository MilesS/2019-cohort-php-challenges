<?php
    // https://docs.google.com/document/d/1qKgFKap5cRv1YBej0fgnvU17UbLMTiSGAlnYKVulA80/edit?usp=sharing

    /**
     * Echos a string that is wrapped around a tag with class
     * 
     * @param Content   $string     A string of Content
     * @param Tag       $tag        Html Tag, default p
     * @param Class     $class      CSS Class, default null
     * 
     * @return Echo     String of content
     */
    function printString( $string, $tag = 'p', $class = null) {
        if ( isset($class) ) $class = ' class="'. $class . '" ';

        echo "<" . $tag . $class .">" . $string . "</" . $tag . ">";
    }

    /**
     * Returns tax
     * 
     * @param Price     $price      A price integer
     * @return Tax Rounded to second decimal as an integer
     */
    function taxes( $price ) {
        return number_format($price * 0.0825, 2);
    }

    /**
     * Returns fees for event
     * 
     * @param Price     $price      A price integer
     * @return Fees rounded to the second decimal
     */
    function getFees( $price ) {
        return number_format($price * 0.03, 2);
    }

    $events = [
        [
            'name' => 'Event 1',
            'location' => 'Bitwise South Stadium',
            'price' => 5.00,
            'date' => '2019-12-04'
        ],
        [
            'name' => 'Event 2',
            'location' => 'Bitwise South Stadium',
            'price' => 1.00,
            'date' => '2019-12-04'
        ],
        [
            'name' => 'Event 3',
            'location' => 'Bitwise South Stadium',
            'price' => 9.00,
            'date' => '2019-12-04'
        ],
        [
            'name' => 'Event 4',
            'location' => 'Bitwise South Stadium',
            'price' => 10.00,
            'date' => '2019-12-04'
        ],
    ];

    $totalFees = 0;
    $totalTax = 0;
    $totalPrice = 0;
    foreach ( $events as $event ) {
        // Naming Stuff
        $name = $event['name'];
        $location = $event['location'];
        $price = $event['price'];
        $date = $event['date'];
        $tax = taxes( $price );
        $fees = getFees( $price );

        // Adding Stuff
        $totalFees = $totalFees + $fees;
        $totalPrice = $totalPrice + $price;
        $totalTax = $totalTax + $tax;

        printString($name, 'h3');
        printString($location);
        printString($price);
        printString($date);
        printString($tax);
        printString($fees);
        echo "<hr />";
    }

    $grandTotal = $totalTax + $totalPrice + $totalFees;

    printString('Total Taxes :' . $totalTax, 'h4');
    printString('Total Price :' . $totalPrice, 'h4');
    printString('Total Fees :' . $totalFees, 'h4');
    printString('Grand Total :' . $grandTotal, 'h4');

    if (isset($_POST['search'])) {
        $searchTerm = htmlspecialchars( strip_tags( $_POST['search'] ) );
    }
?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ; ?>" method="post">
        <input type="text" name="search" id="search" value="<?php echo $searchTerm; ?>">
        <input type="submit" value="Submit">
    </form>
<?php   
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($searchTerm)) {
        $eventsReturned = array_filter( 
            $events, 
            function ($event) use ($searchTerm) {
                if ($event['date'] === $searchTerm) {
                    return $event['date'];
                }
                if ($event['name'] === $searchTerm) {
                    return $event['name'];
                }
                if ($event['location'] === $searchTerm) {
                    return $event['location'];
                }  
            }
        );

        foreach($eventsReturned as $event) {
            foreach($event as $key=>$item) {
                printString($key . ': ' . $item);
            }
        }
    }