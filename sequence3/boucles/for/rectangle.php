<?php

$longueur=readline("Entrer une longueur : ");
$largeur=readline("Entrer une largeur : ");

for($g=0;$g<$largeur;$g++){
    for($i=0;$i<$longueur;$i++) {
        echo "*";
    }
    echo PHP_EOL;
}