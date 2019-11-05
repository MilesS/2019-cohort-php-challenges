<?php
    // Challenge #1
    function printString( $content, $tag = 'p' ) {
        echo '<'. $tag . '>' . $content . '</' . $tag . '>';
    }

    // Challenge #2
    $foodInFridge = ['Apple', 'Onion', 'Banana', 'Asparagus', 'Broccoli'];

    // Challenge #3
    $fruits = [];
    $veggies = [];
    foreach ( $foodInFridge as $food ) {
        if ( $food == 'Apple' || $food == 'Banana' ) {
            array_push($fruits, $food);
        } else {
            array_push($veggies, $food);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>These Are Fruits</td>
                <td>These Are Veggies</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php 
                        foreach ( $fruits as $fruit ) {
                            printString($fruit);
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        foreach ( $veggies as $veggie ) {
                            printString($veggie);
                        }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>

    <?php
        // Challenge #4 
        if( in_array( 'Broccoli', $foodInFridge ) ) {
            printString('Eww Broccoli');
        }

        // Challenge #5 
        $foodForRecipe = ["Onion", "Asparagus", "Broccoli", "Chicken", "Cheese"];
        $foodNeeded = array_diff( $foodForRecipe, $foodInFridge );

        printString("Items Needed", 'h2');
        echo "<ul>";
        foreach ( $foodNeeded as $food ) {
            printString( $food, 'li' );
        }
        echo "</ul>";
    ?>
    </body>
</html>