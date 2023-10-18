<?php

echo "Saisir un prénom :";
$line = readline("Commande : ");
$stockage1 = $line;


echo "Saisir un nom :";
$line = readline("Commande : ");
$stockage2 = $line;

$nombre = strlen($stockage2);
$courriel = $stockage1.".".$stockage2.$nombre."@societe.com";

echo $courriel;