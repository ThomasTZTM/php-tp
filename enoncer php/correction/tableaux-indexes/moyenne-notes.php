<?php

$notes = [10, 12.5, 14, 7, 15, 9.5,8];
$moyenne = 0;
// -------------------------------------------------------------
// Calcul de la moyenne des notes
// -------------------------------------------------------------
// Attention le tableau $notes ne doit pas être vide
if (count($notes) > 0) {
    $moyenne = round(array_sum($notes) / count($notes),2);
    echo "La moyenne des notes est $moyenne";
} else {
    echo "Il n'y a aucune note";
}

echo PHP_EOL;

// -------------------------------------------------------------
// Afficher une appréciation en fonction de la moyenne
// -------------------------------------------------------------
if ($moyenne >= 0 && $moyenne < 10) {
    echo "Vous n'avez pas votre diplôme";
} elseif ($moyenne < 12) {
    echo "Mention passable";
} elseif ($moyenne < 14) {
    echo "Mention assez bien";
} elseif ($moyenne < 16) {
    echo "Mention bien";
} else{
    echo "Mention très bien";
}