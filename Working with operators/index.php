<?php

require_once 'functions.php';
require_once 'tests.php';


// Задание 1
echo '<h2>Task 1</h2>';
echo (16 + 16) * 32 + (1024 - 512) / 3, '<br>';
echo ((16 + 16) * 32 + (1024 - 512))/ 3, '<br>';



// Задание 2
echo '<h2>Task 2</h2>';

// Пример работующего теста
echo 'Test Buy Order Discount is: ' . testOrderDiscount(), '<br>';

echo 'Test Buy Alcohol is: ' . testBuyAlcohol(), '<br>';
echo 'Test Free Delivery is: ' . testFreeDelivery(), '<br>';
