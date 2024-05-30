<?php
$string = '';

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

$data = '';

$myfile = fopen("test.txt", "w+") or die("Unable to open file!");
if(filesize('test.txt') > 0) {
    $data = fread($myfile,filesize("test.txt"));
}

dd($data);

$string = file_get_contents('./test.txt');

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $string = file_get_contents($_FILES['file']['tmp_name']);

    echo htmlspecialchars($_SERVER["PHP_SELF"]);
}

