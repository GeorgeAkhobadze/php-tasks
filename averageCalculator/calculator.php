<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numbers = $_POST['numbers'];
    $result = '';
    if(preg_match("/^\d+(,\d+)*$/", $numbers)) {
        $result = explode(',', $numbers);
        $average = array_sum($result) / count($result);
    } else {
        $error = 'Invalid Input, example: 1,2,3';
    }
}