<?php
$list = file_get_contents(__DIR__ . '/list.json');
//per trasformare array php in oggetti json
header('Content-Type: application/json');
// NON devo restituire una stringa con file JSON
//echo  json_encode($list);
echo $list;
