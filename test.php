<?php
$plan = htmlspecialchars( $_GET['plan'] );
$choices = htmlspecialchars($_GET['choices'] );
$choices = explode(",", $choices);

/**
 * @param String
 * @return "Array of Plans"
 */
function getPlan( $plans, $plan ) {
    return $plans[$plan];
}
​
$plans = [
    "basic" =>
        [
        "name" => "Basic Plan",
        "description" => "
                                <div id ='basic-box'>
                                    <div id='basic-top'>
                                        <img src='images/enterprise-basic-price-banner.svg' alt='' id='basic-box-top'><object id='svgstuff3'><img src='images/basic-icon.svg' alt=''><text id='svgstuff-text-icon-pro'>Basic</text></object>
                                        <object id='svgstuff-bean'><img src='images/basic-price-bean.svg' alt=''><text id='svgstuff-text'>$500</text></object>
​
                                    </div>
                                    <div id='basic-text'>
                                        <p>
                                            Perfect for your small organization's social media and digital design needs.
                                            <button> Learn More</button>
                                        </p>
                                    </div>
                                    <div id='basic-bottom'>
                                        <img src='images/basic-patern-bottom.svg' alt='' id='basic-box-bottom'>
                                    </div>
                                </div>  
                            "
        ],
    "pro" =>
        [
            "name" => "Pro Plan",
            "description" => "
                                <div id ='pro-box'>
                                    <div id='pro-top'>
                                        <img src='images/enterprise-basic-price-banner.svg' alt='' id='pro-box-top'><object id='svgstuff2'><img src='images/pro-icon.svg' alt=''><text id='svgstuff-text-icon-pro'>Pro</text></object>
                                        <object id='svgstuff-bean'><img src='images/pro-price-bean.svg' alt=''><text id='svgstuff-text'>$1,500</text></object>
                                    </div>
                                    <div id='pro-text'>
                                        <p>
                                          Your company is growing, same with your designs. Our Pro Plan expands with you to meet almost all of your design requirements.</br>
                                            <button> Learn More</button>
                                        </p>
                                    </div>
                                    <div id='pro-bottom'>
                                        <img src='images/pro-pattern-bottom.svg' alt='' id='pro-box-bottom'>
                                    </div>
                                </div>  
                             "
        ],
    "enterprise" =>
        [
            "name" => "Enterprise Plan",
            "description" => " <div id ='enterprise-box'>
                                    <div id='enterprise-top'>
                                        <img src='images/enterprise-basic-price-banner.svg' alt='' id='enterprise-box-top'><object id='svgstuff1'><img src='images/enterprize-icon.svg' alt=''><text id='svgstuff-text-icon'>Enterprise</text></object>
                                        <object id='svgstuff-bean'><img src='images/enterprize-price-bean.svg' alt=''><text id='svgstuff-text'>$10,000</text></object>
                                    </div>
                                    <div id='enterprise-text'>
                                        <p>
                                            You have big agency needs. The Enterprise Plan covers every design need you might have.</br>
                                            <button> Learn More</button>
                                        </p>
                                    </div>
                                    <div id='enterprise-bottom'>
                                        <img src='images/enterprie-patern-bottom.svg' alt='' id='enterprise-box-bottom'>
                                    </div>
                                </div>    
                             "
        ],
    "mini" =>
        [
            "name" => "Mini Plan",
            "description" => "
                                <div id ='mini-box'>
                                    <div id='mini-top'>
                                        <img src='images/enterprise-basic-price-banner.svg' alt='' id='mini-box-top'><object id='svgstuff4'><img src='images/pro-icon.svg' alt=''><text id='svgstuff-text-icon-pro'>Mini</text></object>
                                        <object id='svgstuff-bean'><img src='images/pro-price-bean.svg' alt=''><text id='svgstuff-text'>$250</text></object>
                                    </div>
                                    <div id='basic-text'>
                                        <p>
                                            <h4>-Up to Four Social Media Designs a Month</h4>
                                            <p>
                                               A limited social media plan, great for starting out.
                                            </p>
                                            <button> Learn More</button>
                                        </p>
                                    </div>
                                    <div id='mini-bottom'>
                                        <img src='images/pro-pattern-bottom.svg' alt='' id='mini-box-bottom'>
                                    </div>
                                </div>  
                               
                            "
        ]
​
];
​
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.typekit.net/xkt2vwy.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<?php
$suggestPlan = getPlan($plans, $plan);
echo '<h2 id="suggest-plantext">Suggested Plans ';
echo '<h2 id="suggest-reason">Because you picked: ';
​
// Might have to change into a for loop or while
$i = 0;
foreach ($choices as $choice) {
    echo ucfirst($choice) . ' ';
    for($choices=1; $choices>=2;){
        echo $choice . " , ";
    }
    if($choices==1){
        echo ucfirst($choices) . ' ';
    }
    elseif ($choices==2){
        echo ucfirst($choices) . ' , ';
    }
    elseif ($choices==3){
        echo ucfirst($choices) . " and ";
    }
}
echo '</h2>';
​
echo '<h1 id="recommend-text">We Recommend Our ' . $suggestPlan['name'] . ' !</h1>';
//echo $chosenWork['name'];
echo "<div id ='plan-description'> " .$suggestPlan['description'] . "</div>";
​
?>
​
<div id="cta">
    <object>
        <text id="svgstuff-text-cta">
            <h2 id="signup">
                Sign Up With the Perfect Plan Today!
            </h2></br>
            <p>
                Take your graphic design to the next level and grow your business today!
            </p>
            <button id="cta-button">Sign Up!</button>
        </text>
    </object>
</div>
​
<div id="back"><object id='svgstuff-backbean'><img src='images/back-button-bean.svg' alt=''><text id='svgstuff-backtext'>Back</text></object></div>
<div id="next"><object id='svgstuff-nextbean'><img src='images/next-button-bean.svg' alt=''><text id='svgstuff-nexttext'>Next</text></object></div>
​
</html>