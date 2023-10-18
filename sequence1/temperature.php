<?php

echo "Saisir une température en degré :";
$line = readline("Commande : ");
$stockage1 = $line;
readline_add_history($line);


$resultat = ($stockage1*1.8)+32;
echo "$resultat °F";