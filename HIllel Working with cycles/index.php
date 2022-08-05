<?php
for ($i = 1; ; $i++) {
    if ($i > 30) {
        break;
    }
    echo $i;
}

for ($q = 30; $q <= 50; $q++) {
    echo $q;
}
for ($i = 44; $i > 0; $i--) {
    echo $i;
}
$arr = [];
for ($w = 1; $w <= 10; $w++) {
    $arr[] = 'x';
}
var_dump($arr);

// Задание 5
$employees = [
    ['name' => 'Elon musk', 'salary' => 10000],
    ['name' => 'Mark Zuckerberg', 'salary' => 7500],
    ['name' => 'Tim Cook', 'salary' => 20000]
];
$sum = 0;
foreach ($employees as $employee) {
    $sum += $employee['salary'];
}
echo $sum;

// Задание 6
$currency = 26.3;

$salon = [
    ['name' => 'Mercedes benz E300', 'currency' => 'USD', 'price' => 35000],
    ['name' => 'Toyota Camry 3.5', 'currency' => 'UAH', 'price' => 1100000],
    ['name' => 'Honda Accord 2.0', 'currency' => 'UAH', 'price' => 2000000],
    ['name' => 'Mitsubishi Lancer', 'currency' => 'USD', 'price' => 12000],
];
foreach ($salon as $idx => $car) {
    if ($car['currency'] === 'USD') {
        $salon[$idx]['currency'] = 'UAH';
        $salon[$idx]['price'] = round($car['price'] * $currency, 2);
    }
}
var_dump($salon);

// Задание 7
$countries = [
    [
        'name' => 'Ukraine',
        'cities' => [
            ['name' => 'Odessa'],
            ['name' => 'Kiev'],
            ['name' => 'Harkov'],
        ]
    ],
    [
        'name' => 'Germany',
        'cities' => [
            ['name' => 'Berlin'],
            ['name' => 'Dusseldorf']
        ]
    ]
];
foreach ($countries as $arr => $country) {

    foreach ($country['cities'] as $key => $city) {
        echo 'Country:' . $country['name'] . ',City' . $city['name'] . '<br>';
    }


}

// Задани 8
$str = 'the new york times';

$words = explode(' ', $str);
$str = '';
foreach ($words as $word) {
    $word = ucfirst($word);
    $str .= $word . ' ';

}
echo $str;
// Задание 9
$names = ['Dima', 'Gena', 'Dima', 'Petya', 'Petya', 'Lera', 'Maksym', 'Maksym', 'Anna', 'Dima'];

$new = [];

foreach ($names as $name) {
    if (!in_array($name, $new)) array_push($new, $name);
}
var_dump($new);


// Задание 10
$comment = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum sem vel libero tempus suscipit. Vestibulum id neque velit. Aliquam mattis, mauris vel malesuada venenatis, ante erat eleifend libero, ac ultrices leo sapien ut metus. Nulla ornare pretium magna. Maecenas a eleifend est. Nam aliquam non felis id volutpat. Vestibulum euismod fermentum eleifend.';
$words = explode(' ', $comment);
foreach ($words as $key => $word) {
    if ($word === 'Aliquam') {
        echo $key;
        break;
    }
}
// Задание 11
$browsers = ['Chrome', 'Safari', 'Mozilla', 'Opera'];
while (count($browsers) != 0)
    echo array_pop($browsers) . PHP_EOL;