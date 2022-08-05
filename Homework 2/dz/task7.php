<?php

// Задание 7
$getDiscount = function ($price) {
    if ($price < 1000) {
        $discount = 100;
    } elseif ($price > 1000 && $price < 3000) {
        $discount = 500;
    } elseif ($price) {
        $discount = 1000;
    }
    return $discount;
};
function buyProduct($count, $price, callable $getDiscount)
{
    $total = $count * $price;
    $discount = $getDiscount($total);
    return $total - $discount;


}

echo buyProduct(1, 2700, $getDiscount);