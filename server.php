<?php
//richiamo file function(includo)
require_once __DIR__ . '/function.php';
//leggo il file json...restituisce una stringa
$list = file_get_contents(__DIR__ . '/list.json');







//NB. Per leggere le informazioni devo decodificare da stringa a php
$cds = json_decode($list, true); // con true restituisce array associativo php
//elaborazione richiesta
$startCds = $cds;
// map restituisce un array della stessa lunghezza dell aray di partenza con risultato diverso(key)
$startCds = array_map('cdsApi', $startCds);


//dice al client che la pagina che riceverà sarà di tipo json
header('Content-Type: application/json');
echo json_encode($startCds);


//echo $list;
