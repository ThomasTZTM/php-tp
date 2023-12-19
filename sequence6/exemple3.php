<?php

// Déclaration d'un tableau associatif bi-dimensionnel
// dont les éléments sont des tableaux indexés

// Déclarer un tableau associatif '$etudiants'
// Chaque élément représente un étudiant avec son nom et ses notes
// La clé de l'élément est le nom de l'étudiant
// La valeur de l'élément est un tableau indexé de notes
// Chaque étudiant peut avoir un nombre de notes différent
$etudiants = [
    "Dupont" => [10,12,9],
    "Durand" => [15,8,12],
    "Martin" => [10,8,9,10]
];

// Afficher une valeur du tableau
// Afficher la 2ème note de Dupont
echo PHP_EOL."-------------------------------------" . PHP_EOL.PHP_EOL;

echo $etudiants["Dupont"][1];

// Afficher toutes les valeurs du tableau
echo PHP_EOL."-------------------------------------" . PHP_EOL.PHP_EOL;

foreach ($etudiants as $tableau){
    foreach ($tableau as $note){
        echo " $note ";
    }
}

// Afficher tous les éléments (clé et valeur) du tableau
echo PHP_EOL."-------------------------------------" . PHP_EOL.PHP_EOL;

foreach ($etudiants as $index => $tableau){
    echo $index;
    foreach ($tableau as $indexs => $note) {
        echo " [$index][$indexs] = $note ";
    }
    echo PHP_EOL;
}

// Calculer la moyenne de chaque étudiant
echo PHP_EOL."-------------------------------------" .PHP_EOL.PHP_EOL;

$moyenne=$etudiants;

foreach ($etudiants as $index => $tableau){
    $somme=array_sum($tableau);
    $moyenne[$index]=round($somme/count($tableau));
}

foreach ($moyenne as $index => $lignes){
    echo "La moyenne de $index est de $lignes \n";
}











echo PHP_EOL;




