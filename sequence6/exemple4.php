<?php

// Déclaration d'un tableau associatif bi-dimensionnel
// dont les éléments sont des tableaux associatifs

// Déclarer un tableau associatif '$personnes'
// Chaque élement représente une personne avec son numéro, son nom, son prénom et son âge
// La clé de l'élément est le numéro de la personne
// La valeur de l'élément est un tableau associatif avec les clés "nom", "prenom" et "age"
// Chaque valeur possède les mêmes clés, la même structure
$personnes = [
    "P001" => ["nom" => "Dupond", "prenom" => "Jean", "age" => 25],
    "P002" => ["nom" => "Martin", "prenom" => "Paul", "age" => 30],
    "P003" => ["nom" => "Durand" ,"prenom" => "Marie", "age" => 20]
];

// Afficher une valeur du tableau
// Afficher le prénom de la personne dont le numéro est "P001"
echo "-------------------------------------" . PHP_EOL;

// Afficher toutes les valeurs du tableau
echo "-------------------------------------" . PHP_EOL;

// Afficher toutes les valeurs du tableau avec le destructuring
// Utilisation possible car chaque valeur (tableau associatif) possède les mêmes clés
echo "-------------------------------------" . PHP_EOL;

// Afficher tous les éléments (clé et valeur) du tableau
echo "-------------------------------------" . PHP_EOL;




