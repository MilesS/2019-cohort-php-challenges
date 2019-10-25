<?php
     $plan = htmlspecialchars( $_GET['plan'] );

     echo $plan;

     die();
    /**
     * @param String
     * @return "Array of Plans"
     */
     function getPlan( $plans, $planCode ) {
        return $plans[$planCode];
    }

    $plans = [
        'basic' => [ 
            'Title' => 'Basic Plan',
            'Description' => 'Basic plan stuff',
            'Image' => 'image.jpg',
        ],
        'pro' => [
            'Title' => 'Pro Plan',
            'Description' => 'Pro plan stuff',
            'Image' => 'image.jpg',
        ],
        'enterprise' => [
            'Title' => 'Enterprise Plan',
            'Description' => 'Enterprise plan stuff',
            'Image' => 'image.jpg',
        ],
        'mini' => [
            'Title' => 'Mini Plan',
            'Description' => 'Mini plan stuff',
            'Image' => 'image.jpg',
        ]
    ];

    $suggestPlan = getPlan($plans, $plan ); 

    ?>

    <h1><?php echo $suggestPlan['Title']; ?></h1>

    <p><?php echo $suggestPlan['Description']; ?></p>
