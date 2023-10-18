<?php

echo "Saisir un prénom :";
$line = readline("Commande : ");
$stockage1 = $line;


echo "Saisir un nom :";
$line = readline("Commande : ");
$stockage2 = $line;

$resultat = strtoupper(substr($stockage1, 0, 1));
$resultat = $resultat.(strtoupper(substr($stockage2, 0, 1)));

echo "Vos initiales sont : ".$resultat;