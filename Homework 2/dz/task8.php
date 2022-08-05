<?php

// Задание 8
$names = ['Maksym', 'Vladimir', 'Genadiy', 'Evgeniy', 'Leonid', 'Max', 'Ekaterina'];
$callback = function ($a, $b) {
    return strlen($b) <=> strlen($a);
};
usort($names, $callback);
var_dump($names);