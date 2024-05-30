<?php
$string = '';

if($_SERVER["REQUEST_METHOD"] === "POST") {
$string = str_word_count(file_get_contents($_FILES['file']['tmp_name']));
}

