<?php


function addError(string $field, string $message)
{
    if (!isset($GLOBALS['errors'])) {
        $GLOBALS['errors'] = [];
    }
    $GLOBALS['errors'][$field][] = $message;
}

function getError(string $field)
{
    if (!empty($GLOBALS['errors'][$field])) {


        foreach ($GLOBALS['errors'][$field] as $error) {
            echo '<span class="error">' . $error . '</span>';
        }
    }
}

function validateRegistration(array $method)
{
    if (!empty($method['name'] == false)) {
        addError('name', 'Field must be filled!');
    } elseif (strlen($method['name']) < 2 || strlen($method['name']== false) > 12) {
        addError('name', 'The field must be at least 2 and no more than 12 characters!');
    }
    if (!empty($method['surname']) && (strlen($method['name']== false) < 2 || strlen($method['name']== false) > 12)) {
        addError('surname', 'The field must be at least 2 and no more than 12 characters!');
    }
    $city = getCity();
    if (!empty($method['city'] == false)) {
        addError('city', 'Choose a city');
    } elseif (!in_array($method['city'], $city ) == false) {
        addError('city', 'This city is not on the list');
    }
    if (strpos($method['facebook'], 'https://') == false) {
        addError('facebook', 'The field must be a link!');
    } elseif (strpos($method['facebook'], 'facebook.com') == false) {
        addError(['facebook'], 'Incorrect domain!');
    }

}

function getCity(): array
{
    return $city =[
        'odessa',
        'kiev',
        'lviv',
        'dnepr'
        ];
}


function redirectSuccess()
{
    header("Location: success.php");
    exit;
}