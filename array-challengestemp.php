<?php
    $people = ["Mom", "Dad", "Sister", "Kyra"];

    foreach ( $people as $person ) {
        echo "<p>I love $person</p>";
    }

    $transactions = [
        -100, -40, 30, 40, 108
    ];

    $total = 0;
    foreach( $transactions as $transaction ) {
        if ($transaction >= 0) {
            echo "<p>Deposited $transaction </p>";
        } else {
            echo "<p>Withdrew $transaction </p>";
        }
        $total = $total + $transaction;
    }
    $tax = number_format($total * 0.30, 2);
    $total = number_format($total, 2);
    $afterTax = number_format($total - $tax, 2);

    echo "<p>Total $total </p>";
    echo "<p>Tax $tax </p>";
    echo "<p>After Tax $afterTax </p>";

    $posts = [
        [
            'Title' => 'The Title',
            'Content' => 'The Content',
            'Author' => 'Miles',
            'Image' => 'https://homepages.cae.wisc.edu/~ece533/images/airplane.png'
        ],
        [
            'Title' => 'The Title2',
            'Content' => 'The Content2',
            'Author' => 'Miles',
            'Image' => 'https://homepages.cae.wisc.edu/~ece533/images/arctichare.png'
        ]
    ];

    function the_title($pre = null, $close = null) {
        global $post;

        if ($pre == null) $pre = '<h1>';
        if ($close == null) $close = '</h1>';

        echo $pre . $post['Title'] . $close;
    }

    function the_content() {
        global $post;
        echo '<p>'. $post['Content'] . '</p>';
    }

    function the_author() {
        global $post;
        echo '<p>' . $post['Author'] . '</p>';
    }

    foreach( $posts as $post ) {
        //echo $post['Title'];
        the_title("<h2>", "</h2>");
        the_content();
        the_author();
        // echo $post['Content'];
        // echo "<img src='" . $post['Image'] . "' />";
        // echo $post['Author'];
    }