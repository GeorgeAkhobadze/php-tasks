<?php


$str = file_get_contents($_FILES['file']['tmp_name']);

echo strlen(str_replace(' ','',$str));

