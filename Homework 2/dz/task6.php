<?php

// Задание 6.
$callback = function (string $gender) {
    if ($gender == 'man') {
        return 'blue';
    } else {
        return 'pink';
    }

};
function showUserInformation(array $user, callable $callback)
{

    if (!isset($user['name'], $user['city'], $user['age'], $user['gender'])) {
        echo 'Populate all fields';
        return;
    }

    if (!is_int($user['age'])) {
        echo 'Populate the age field';
        return;
    }

    $color = $callback($user['gender']);

    echo sprintf(
        '<p>Name: %s, City: %s, Age: %d, <span style="color:%s;">Gender: %s</span></p>',
        $user['name'],
        $user['city'],
        $user['age'],
        $color,
        $user['gender'],
    );

}

$user = ['name' => 'Alex', 'city' => 'Odessa', 'age' => 20, 'gender' => 'man'];
showUserInformation($user, $callback);
