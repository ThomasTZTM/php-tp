<?php

echo "Saisir un nombre entier :";
$line = readline("Commande : ");
$stockage1 = $line;


echo "Saisir un nombre entier :";
$line = readline("Commande : ");
$stockage2 = $line;

$division = $stockage1/$stockage2;
echo "la division de $stockage1 par $stockage2 fait : ".round($division, 2);