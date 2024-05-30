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
    $result = '';
    $result = array_filter(explode(',', $numbers));
    $checkIntegers = array_reduce($result, function ($result, $item) {
        return is_numeric($item); }
        , true);
    if($checkIntegers) {
        $average = round(array_sum($result) / count($result), 2);;
    } else {
        $error = 'Invalid Input, example: 1,2,3';
    }
}