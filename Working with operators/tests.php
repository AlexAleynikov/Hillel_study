<?php

require_once 'functions.php';

// Тест который проверяет все кейсы для ф-ции orderDiscount
function testOrderDiscount() {
    $case1 = orderDiscount('Notebook', 1333, 7); // Идеальные условия
    $case2 = orderDiscount('Headphones', 1500, 5); // Тест на тип товара
    $case3 = orderDiscount('Notebook', 999, 6); // Тест на цену меньше
    $case4 = orderDiscount('Notebook', 1500, 3); // Тест на больше 3
    $case5 = orderDiscount('Notebook', 1333, 10); // Тест на меньше 10

    // $case1, проверяю идеальные условия, что прохожу по всем кейсам, ожидаю true
    // $case2, так как товар не Notebook, ожидаю false
    // $case3, так как товар дешевле 1000, ожидаю false
    // $case4, так как количество не больше 3, ожидаю false
    // $case5, так как поличество не меньше 10, ожидаю false
    // если все условия исполнятся как я ожидаю, это будет означать что все тест пройдены, перменная $result будет равна true
    $result = $case1 == true && $case2 == false && $case3 == false && $case4 == false && $case5 == false;

    $status = displayStatusTest($result);
    return $status;
}

function testBuyAlcohol() {
    $case1 = buyAlcohol(16, 13); // Тест на продажу меньше 18 лет
    $case2 = buyAlcohol(18, 11); // Тест на продажу 18 включительно
    $case3 = buyAlcohol(21, 4); // Тест на продажу до 6 утра
    $case4 = buyAlcohol(21, 6); // Тест на продажу 6 утра включительно
    $case5 = buyAlcohol(25, 23); // Тест на продажу после 21 часа
    $case6 = buyAlcohol(25, 21); // Тест на продажу 21 час включительно

    // $case1, проверяю если возраст меньше 18, ожидаю false
    // $case2, проверяю если возраст 18 включительно, ожидаю true
    // $case3, проверяю что запрещено до 6 утра, ожидаю false
    // $case4, проверяю что с 6 утра включительно можно, ожидаю true
    // $case5, проверяю что после 21 запрещено, ожидаю false
    // $case6, проверяю что до 21 часа включительно, ожидаю true
    // если все условия исполнятся как я ожидаю, это будет означать что все тест пройдены, перменная $result будет равна true
    $result = $case1 == false && $case2 == true && $case3 == false && $case4 == true && $case5 == false && $case6 == true;

    $status = displayStatusTest($result);
    return $status;
}

function testFreeDelivery() {
    $case1 = freeDelivery('Dnepr', 500, 1); // Тест, что в Dnepr не доставляем
    $case2 = freeDelivery('Odessa', 50, 1); // Тес, что расстояние должно быть больше 100
    $case3 = freeDelivery('Odessa', 1500, 1); // Тест, что расстояние должно быть меньше 1000
    $case4 = freeDelivery('Odessa', 1500, 5); // Тест, что коробок должна быть только 1
    $case5 = freeDelivery('Odessa', 888, 1); // Тест, что доставляем если все услоия прошли

    // $case1, проверяю что в город Dnepr мы не доставляем, ожидаю false
    // $case2, проверя что если расстояние меньше 100, то не доставляем, ожидаю false
    // $case3, проверя что если расстояние больше 1000, то не доставляем, ожидаю false
    // $case4, проверя что если коробок не 1, то не доставляем, ожидаю false
    // $case5, проверя что если город не Dnepr и расстояние в пределах от 100 до 1000 и коробка 1, то доставляем, ожидаю true
    // если все условия исполнятся как я ожидаю, это будет означать что все тест пройдены, перменная $result будет равна true
    $result = $case1 == false && $case2 == false && $case3 == false && $case4 == false && $case5 == true;

    $status = displayStatusTest($result);
    return $status;
}

// Ф-ция форматирования результата в красивый html с цветом
function displayStatusTest($status) {
    if ($status == true) {
        return '<strong style="color: green;">PASSED</strong>';
    } else {
        return '<strong style="color: red;">FAILED</strong>';
    }
}