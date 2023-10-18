<?php

for ($i=0; $i < 1; $i++) {
    echo "Saisir un nombre (nombre1) :";
    $line = readline("Commande : ");
    $stockage1 = $line;
    readline_add_history($line);
}

for ($i=0; $i < 1; $i++) {
    echo "Saisir un nombre (nombre1) :";
    $line = readline("Commande : ");
    $stockage2 = $line;
    readline_add_history($line);
}

for ($i=0; $i < 1; $i++) {
    echo "Saisir un nombre (nombre3) :";
    $line = readline("Commande : ");
    $stockage3 = $line;
    readline_add_history($line);
}
$resultat = max($stockage1, $stockage2, $stockage3);

echo "Le nombre le plus grand est $resultat";