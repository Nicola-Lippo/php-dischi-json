<?php
//leggo il file json...restituisce una stringa
$list = file_get_contents(__DIR__ . '/list.json');

/*dice al client che la pagina che riceverà sarà di tipo json
header('Content-Type: application/json');*/

//NB. Per leggere le informazioni devo decodificare da stringa a php
$cds = json_decode($list, true); // con true restituisce array associativo php
header('Content-Type: application/json');
echo json_encode($cds);


//echo $list;
