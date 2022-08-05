<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Задание 1.

function aloha($name)
{
    echo 'Aloha my dear, ' . $name . '!';

}

aloha('Alex');

// Задание 2.
function ola(string $name = 'friend')
{
    echo 'Ola my dear, ' . $name . '!';

}

ola();
// Задание 3
function getDay(int $day)
{
    $days = [1 => 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
    if (!array_key_exists($days, $day)) {
        return null;
    }
    return $days[$day];
}


//Задание 4
function brokk(string $gender, int $h)
{
    if ($gender == 'man') {
        return ($h - 100) * 1.15;
    } elseif ($gender == 'female') {
        return ($h - 110) * 1.15;
    }
}


// Задание 5.
function getNumbers(array $numbers)
{
    $max = null;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] > $max or $max === null) {
            $max = $numbers[$i];
        }
    }
    echo $max;
}

$numbers = [1, 500, 100, 777, 999, 322, 7871, 9999, 7];

getNumbers($numbers);



