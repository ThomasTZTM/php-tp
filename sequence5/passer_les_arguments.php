<?php

function incrementer(int& $nombre):void{
    $nombre += 1;
}

$compteur = 1;
incrementer($compteur);
echo $compteur;


echo PHP_EOL;


function incrementer2(int $nombre):int{
    $nombre += 1;
    return $nombre;
}

$compteur = 1;
$compteur=incrementer2($compteur);
echo $compteur;