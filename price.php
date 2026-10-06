<?php
    $price = 600;
    $discount = .10;
    $overall = $price * $discount;


    if ($price >= 500){
        echo "Discounted Price:". $price - $overall;
    }else{
        echo $price;
    }

?>