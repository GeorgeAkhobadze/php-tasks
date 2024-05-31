<?php
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numbers = $_POST['numbers'];
    $error = '';

    $result = array_filter(explode(',', $numbers), function ($item) use (&$error) {
        if(is_numeric($item)) {
            return $item;
        } else {
            return $error = 'Invalid Input, example: 1,2,3';

        }
    });
    $average = round(array_sum($result) / count($result), 2);a
}