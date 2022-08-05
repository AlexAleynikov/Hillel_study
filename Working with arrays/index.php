<?php

// Тут можно вставить результат предыдущих заданий

$arr1 = ['Orange', 'Yellow', 'Black', 'Blue',];
$arr1[] = 'White';
$arr1[] = 'Purple';
echo 'My favorite color is ' . $arr1[4], ', but ' . $arr1[0], ' is prettier now';
unset($arr1[0], $arr1[3]);
$arr1[1] = 'Red';
$arr1[2] = 'Red';
// Задание 6. Пример
$phone = [
    'brand' => 'Apple Iphone',
    'model' => '13 PRO MAX 256',
    'memory' => '256GB',
    'camera' => '20px',
];
$PS5 = [
    'CPU' => 'AMD Ryzen 3',
    'GPU' => 'AMD RDNA2',
    'RAM' => '16 GB',
    'weight' => '4.5 Kg',
    'management' => 'DualSense',
];
// Задание 7
$users = [
    [
        'login' => 'test@gmail.com',
        'password' => 'qwerty'
    ],
    'user1' => [
        'login' => 'bob@gmail.com',
        'password' => 'bob4rever'
    ],
    [
        'login' => 'green@yandex.ru',
        'password' => 'green123'
    ]
];
echo 'User: ' . $users['user1']['login'], 'Password:' . $users['user1']['password'];
echo 'User:' . $users[1]['login'], 'Password:' . $users[1]['password'];
// Задание 8
$subscribers = [
    [
       'user' => 'dima',
        'emails' => ['test@gmail.com', 'dimon43@yandex.ru']
    ],
    [
        'user' => 'alena',
        'emails' => ['alena@gmail.com']
    ],
    [
        'user' => 'ira',
        'emails' => ['iri4ka@gmail.com']
    ]
];
array_push($subscribers[2]['emails'],'iraaaaaaaa2233@gmail.com');
unset($subscribers[0]['emails'][1]);

// Задание 10
$names = ['Anna', 'Gena', 'Dima', 'Anna', 'Anna', 'Dima'];
$result = array_unique($names);
var_dump($result);
// Задание 11 Сделать
$numbers = [10, 100, 1000, 500];
echo array_sum($numbers);
// Задание 12
$company = [
    'name' => 'Facebook',
    'employees' => 1500,
    'domain' => 'fb.com'
];
var_dump(array_keys($company));
var_dump(array_values($company));

