<?php
function cdsApi($disk)
{
    return [
        "startImg" => $disk['img'],
        "startName" => $disk['name'],
        "startAuthor" => $disk['author'],
        "startEdition" => $disk['edition']

    ];
}
