<?php
    // Challenge #1
    function printString( $content, $tag = 'p', $class) {

        $html = "<" . $tag;
        if (isset($class)) {
            $html .= " class='" . $class . "'";
        }
        $html .= ">";
        $html .= $content;
        $html .= "</". $tag . ">";

        return $html;
    }

    // List for Challenge #2
    $numbers = [ 1, 23, 3, 52, 64, 18, 34, 48, 93, 23];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //Challenge #2
        foreach ($numbers as $number) {
            if ( $number % 2 == 0 ) {
                echo printString($number, 'p', 'highlighted');
            } else {
                echo printString($number);
            }
        }

        // Challenge #3
        $evenNumbers = [];
        $oddNumbers = [];
        foreach ( $numbers as $number ) {
            if ($number % 2 == 0) {
                array_push($evenNumbers, $number);
            } else {
                array_push($oddNumbers, $number);
            }
        }
    ?>
    <table>
        <tr>
           <td>
                These Numbers are Even
           </td> 
           <td>
                These Numbers are Odd
           </td>
        </tr>
        <tr>
            <td>
                 <?php 
                    foreach ($evenNumbers as $evenNumber) {
                        echo printString($evenNumber);
                    } 
                ?>
            </td>
            <td>
                <?php 
                    foreach ($oddNumbers as $oddNumber) {
                        echo printString($oddNumber);
                    } 
                ?>
            </td>
        </tr>
    </table>
    
    <?php 
        // Challenge #4
        $veggies = ['Tomatoes', 'Spinach', 'Squash', 'Onions'];

        /**
         * in_array
         * 
         * First parameter is what you are looking for
         * Second parameter is where you are looking
         */
        if ( in_array( "Tomatoes", $veggies ) ) {
            echo printString( "Those Tomatoes are Rotten" );
        }

        // Challenge #5
        $userWishlist = ['Shoes', 'Bike', 'Computer', 'Sunglasses'];
        $userPurchases = ['Shoes', 'Bike'];

        $newWishlist = array_diff($userWishlist, $userPurchases);

        echo printString("My Wishlist", 'h3');
        echo '<ul>';
        foreach ( $newWishlist as $item ) {
            echo printString($item, 'li');
        }
        echo '</ul>';
    ?>
</body>
</html>