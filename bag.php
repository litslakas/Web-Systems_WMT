<?php
    $bag = 1500;
    $discount = 0.10;
    $discountprice = $bag * $discount;

    if ($bag >= 1000){
        echo "Discounted Price: ". $bag - $discountprice;

    }else{
        echo "Total Price: " . $bag;
    }
?>