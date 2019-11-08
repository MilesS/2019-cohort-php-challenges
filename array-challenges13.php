<?php
    // Challenge #1
    function printString( $content, $tag = 'p', $class) {
        if (isset($class)) {
            $classString = "class='". $class ."'";
        }    
        echo '<' . $tag . ' '.  $classString .' >' . $content . '</' . $tag . '>';
    }

    $signedUp = [
        'attending' => [
            'Miles Sebesta', 
            'Jason Cooksey', 
            'Miles L.',
            'Miles Sebesta', 
            'Jason Cooksey',
        ],
        'not attending' => [
            'Bob Ross',
            'John Doe',
        ]
    ];

    $filtered = [];
    foreach($signedUp as $key=>$type) {
        $cleanedArray = array_unique( $signedUp[$key]);
        $filtered[$key] = $cleanedArray;
    }

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
          foreach ($filtered as $key=>$type) {
            if ($key == 'attending') {
                $class = 'highlighted';
            } else {
                $class = null;
            }
            foreach ($type as $person) {
                printString($person, 'p', $class);
            }
        }
    ?>
    <div class="flex">
        <?php 
            foreach ($filtered as $key=>$type) {
                echo '<div class="box">';

                    printString($key, 'h2');

                    foreach ($type as $person) {
                        printString($person);
                    }

                echo '</div>';
            }
        ?>
    </div>
</body>
</html>