<?php

echo "Saisir le prix HT :";
$line = readline("Commande : ");
$stockage1 = $line;


echo "Saisir le taux de TVA :";
$line = readline("Commande : ");
$stockage2 = $line;


$stockage2=$stockage2/100;
$stockage1=$stockage1+($stockage1*$stockage2);

echo "Le prix TTC est de : ".round($stockage1, 2);