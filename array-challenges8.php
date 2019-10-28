<?php   
    // Challenege 4
    $assigned = htmlspecialchars(strip_tags($_GET['assigned']));
    
    // Challenge 2
    function wrapText( $content, $tag = 'p') {
       return '<'. $tag .'>' . $content . '</'. $tag .'>';
    }

    // Challenge 1  
    $tasks = [
        [
            'assigned' => 'John Doe',
            'title' => 'Task 1',
            'description' => 'Description 1',
        ],
        [
            'assigned' => 'John Doe',
            'title' => 'Task 2',
            'description' => 'Description 2',
        ],
        [
            'assigned' => 'Miles',
            'title' => 'Task 3',
            'description' => 'Description 3',
        ],
    ];

    // Challenge 3
    foreach ( $tasks as $task ) {
        if ($task['assigned'] == 'John Doe') {
            echo wrapText( $task['title'], 'h2');
            echo wrapText( $task['description'] );
        }
    }

    // Challenge 5
    foreach ( $tasks as $task ) {
        // set assigned to $assigned from the URL get
        if ($task['assigned'] == $assigned) {
            echo wrapText( $task['title'], 'h2');
            echo wrapText( $task['description'] );
        }
    }
