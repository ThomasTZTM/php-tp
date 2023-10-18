<?php

// Demander la saisie d'un nombre à l'utilisateur et afficher si le nombre saisi est positif ou négatif

echo "Saisir un nombre :";
$nombre = readline(" ");

if ($nombre>=0) {
    echo "Le nombre $nombre est positif";
}else {
    echo "Le nombre $nombre est négatif";
}
