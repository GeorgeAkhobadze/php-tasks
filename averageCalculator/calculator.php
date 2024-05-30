<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numbers = $_POST['numbers'];
    $result = '';
    if(preg_match("/^\d+(?:\.\d+)?(?:,\d+(?:\.\d+)?)*$/", $numbers)) {
        $result = explode(',', $numbers);
        $average = round(array_sum($result) / count($result), 2);;
    } else {
        $error = 'Invalid Input, example: 1,2,3';
    }
}