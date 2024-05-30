<?php

function randomizer($characterType) {
    return htmlspecialchars($characterType[rand(0, strlen($characterType) - 1)]);
}

$characters = [];
$string = "";

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['lowercaseLetters'])) {
        $characters[] = "abcdefghijklmnopqrtuvwxyz";
    }
    if (isset($_POST['uppercaseLetters'])) {
        $characters[] = "ABCDEFGHIJKLMNOPQRTUVWXYZ";
    }
    if (isset($_POST['symbols'])) {
        $characters[] = "!@#$%^&*()_<+>?";
    }
    if (isset($_POST['specialCharacters'])) {
        $characters[] = "!#$%&()*+,-./:;<=>?@[\]^_{|}~";
    }
    if(! empty($characters)) {
        for ($i = 0; $i <= $_POST['length']; $i++) {
            $type = rand(0, count($characters) - 1);
            $string .= randomizer($characters[$type]);
        }
    }

}
