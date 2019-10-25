<?php

    $people = ["Mom", "Dad", "Kyra", "Jason"];

    foreach ( $people as $person ) {
        echo "<p>I love $person </p>";
    }

    $transactions = [
        -100, -40, 30, 40, 50, 60
    ];

    $total = 0;
    foreach ( $transactions as $trasaction ) {
        if ($trasaction > 0 ) {
            echo "<p>Deposited $trasaction </p>";
        } else {
            echo "<p>Withdrew $trasaction </p>";
        }
        $total = $total + $trasaction;
    }

    $tax = number_format($total * 0.33, 2);
    $afterTax = number_format($total - $tax, 2);

    echo "<p>Total $total </p>";
    echo "<p>Tax $tax </p>";
    echo "<p>After Tax $afterTax </p>";


    function the_title($pre, $close) {
       global $post;

       if ($pre == null) $pre = '<h1>';
       if ($close == null ) $close = '</h1>';

        echo $pre. $post['Title'] . $close;
    }

    function the_content() {
        global $post;
        echo '<p>' . $post['Content'] . '</p>';
    }

    $posts = [
        [
            'Title' => 'The Title',
            'Content' => 'The Content', 
            'Image' => 'https://homepages.cae.wisc.edu/~ece533/images/airplane.png'
        ], 
        [
            'Title' => 'The Title2',
            'Content' => 'The Content2', 
            'Image' => 'https://homepages.cae.wisc.edu/~ece533/images/arctichare.png'
        ]
    ];

  
    foreach ( $posts as $post ) {
       
      //  echo "<h2>" . $post['Title'] . "</h2>";
      //  echo "<p>" .  $post['Content'] . "</p>";
        echo "<img src='" . $post['Image'] . "' />";
        the_title('<h3>', '</h3>');
        the_content();
    }