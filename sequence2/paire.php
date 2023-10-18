<?php

// Demander la saisie d'un nombre à l'utilisateur et afficher si le nombre saisi est paire ou impaire

echo "Saisir un nombre :";
$nombre = readline(" ");

if (($nombre%2) == 0) {
    echo "Le nombre $nombre est paire";
}else {
    echo "Le nombre $nombre est impaire";
}