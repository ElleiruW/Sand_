<?php

function dollarsConverter4Trip($amount, $currency){
    $currency= "USD";
    if(is_int($amount) || is_float($amout) && $currency=true){
        $amount/=1.085965;
        return $amount;
    }elseif(!$currency=true){                           //opposite to dollar does not necessarily imply EUR
        $amount *= 1.085965;
        return $amount;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Going on a Trip _ CONVERT YOUR CASH </title>
    </head>
    <body>						<!-- create small box where users can insert their amount to be converted -->
        <h1>Convert your USD to EUR...</h1>
        <div>
        <?php if ($curency=true) {?>
        <input type="number" name="amount" placeholder="insert your dollars"></label>
        	<div> <?php echo $amount . ''.$currency ?> </div>
        
        </div>
        <?php }?>
        
        <h1>Convert your EUR to USD...</h1>
        <div>
        <?php if (!($curency=true)) {?>
        <input type="number" name="amount" placeholder="insert your dollars"></label>
        	<div> <?php echo $amount . ''.$currency ?> </div>
        
        </div>
        <?php }?>
        
    </body>
</html>    