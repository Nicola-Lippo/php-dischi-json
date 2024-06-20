<?php
//Array multidimensionale dischi
$list = [
    [
        'img' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/2c/Bon_Jovi_New_Jersey.jpg/220px-Bon_Jovi_New_Jersey.jpg',
        'name' => 'New Jersey',
        'author' => 'Bon Jovi',
        'edition' => '1988',
    ],
    [
        'img' => 'https://upload.wikimedia.org/wikipedia/en/thumb/1/17/Queen_Live_At_Wembley_%2786.png/220px-Queen_Live_At_Wembley_%2786.png',
        'name' => 'Live at Wembley 86',
        'author' => 'Queen',
        'edition' => '1992',
    ],
    [
        'img' => 'https://upload.wikimedia.org/wikipedia/en/c/c1/Sting_-_Ten_Summoner%27s_Tales.png',
        'name' => "Ten's Summoner's Tales",
        'author' => 'Sting',
        'edition' => '1993',
    ],
    [
        'img' => 'https://upload.wikimedia.org/wikipedia/en/thumb/c/c0/Creuza_de_Ma.jpg/220px-Creuza_de_Ma.jpg',
        'name' => 'Crêuza de mä',
        'author' => 'Fabrizio De Andrè',
        'edition' => '1981',
    ],
    [
        'img' => 'https://upload.wikimedia.org/wikipedia/en/d/de/Iron_Maiden-Dance_of_Death.jpg',
        'name' => 'Dance of Death',
        'author' => 'Iron Maiden',
        'edition' => '2003',
    ],
    [
        'img' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/97/Eric_Clapton_OMCOMR.jpg/220px-Eric_Clapton_OMCOMR.jpg',
        'name' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'edition' => '2002',
    ],
];
//per trasformare array php in oggetti json
header('Content-Type: application/json');
// devo restituire una stringa
echo  json_encode($list);
