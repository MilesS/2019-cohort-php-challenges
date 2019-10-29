<?php
    // Challenge #4
    $location = htmlspecialchars( strip_tags( $_GET['location'] ) );

    // Challenge #2
    function wrapText($content, $tag = 'p') {
        return '<'.$tag.'>' . $content . '</'.$tag.'>';
    }

    // Challenge #1
    $events = [
        [
            'location' => 'Bitwise',
            'title' => 'Event 1',
            'description' => 'Description 1'
        ],
        [
            'location' => 'Bitwise',
            'title' => 'Tacobout Tuesday',
            'description' => 'Description 2'
        ],
        [
            'location' => 'The Hive',
            'title' => 'Event 3',
            'description' => 'Description 3'
        ]
    ];

    // Challenge #3
    foreach($events as $event) {
        if( $event['location'] == 'Bitwise') {
            echo wrapText($event['title']);
        }
    }

    // Challenge #5
    $i = 0;
    foreach($events as $event) {
        if( $event['location'] == $location) {
            echo wrapText($event['title'], 'h1');
            echo wrapText($event['description'], 'h2');
            echo wrapText($event['location']);
        } else {
            if ($i == 0) {
                echo wrapText('Sorry there are no events here');
            }
        }
        $i++;
    }
