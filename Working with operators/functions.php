<?php

// Ф-ция для примера
function orderDiscount($product, $price, $count) {
    // Если товар == Notebook И цена его выше 1000 И (количество больше 3 и меньше 10)
    return $product == 'Notebook' && $price > 1000 && ($count > 3 && $count < 10);
}

// Ф-ция от задания 2
// Если возраст больше 18 включительно и время в пределах от 6 до 21 включительно
function buyAlcohol($age, $hour) {
    return $age >= 18 && ($hour >= 6 && $hour <= 21);
}

// Ф-ция от задания 3
// Если  город только не Днепр и расстояние в пределах больше 100 и меньше 1000 и только если коробок 1
function freeDelivery($city, $distance, $boxes) {
    return $city != 'Dnepr'&& ($distance > 100 && $distance < 1000) && $boxes == 1;
}