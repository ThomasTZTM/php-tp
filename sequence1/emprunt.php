<?php

echo "Saisir le montant à emprunter (ex: 100000 euros) :";
$line = readline("Commande : ");
$emprunt = $line;


echo "Saisir un taux d'intérêt annuel (ex: 3,00 %):";
$line = readline("Commande : ");
$tauxinter = $line;

echo "Saisir la durée en année (ex : 5) :";
$line = readline("Commande : ");
$duree = $line;

$mensualite=(($emprunt*($tauxinter/100))/12)/(1-(1+(($tauxinter/100)/12))**-($duree*12));

echo "La mensualité à rembourser est de ".round($mensualite, 2);
$total = $mensualite*($duree*12);
$aRembourser = $total - $emprunt;

echo PHP_EOL;
echo "Le cout de l'emprunt est de ".round($aRembourser, 0). " euros";

echo PHP_EOL;
echo "__________________________________________________________________________________";