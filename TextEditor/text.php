<?php


function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

$data = '';

if (file_exists('test.txt')) {
    $data = file_get_contents('test.txt');
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = $_POST['editedText'];

    $myfile = fopen("test.txt", "w+") or die("Unable to open file!");

    fwrite($myfile, $data);
}







