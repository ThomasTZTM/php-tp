<?php
echo "\n\n";
// Déclaration d'un tableau indexé bi-dimensionnel
// dont les valeurs sont des tableaux indexés d'entiers
// Chaque valeur peut être un tableau de taille différente
$tab = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9, 10]
];

// Afficher une valeur particulière du tableau
echo "-----------------Afficher une valeur particulière du tableau--------------------" . PHP_EOL;
echo PHP_EOL;

echo $tab[0][0];


echo PHP_EOL;
echo PHP_EOL;

// Afficher toutes les valeurs du tableau
echo "-----------------Afficher toutes les valeurs du tableau--------------------" . PHP_EOL;
echo PHP_EOL;

foreach ($tab as $tableau){
    foreach ($tableau as $valeur){
        echo "$valeur / ";
    }
}

echo PHP_EOL;
echo PHP_EOL;

// Afficher tous les éléments (index et valeur) du tableau
echo "-------------------Afficher tous les éléments (index et valeur) du tableau------------------" . PHP_EOL;
echo PHP_EOL;


foreach ($tab as $index=>$tableau){
    echo "tab";
    foreach ($tableau as $indexs => $valeur){
        echo " [$index][$indexs] = $valeur  ";
    }
    echo PHP_EOL;
}
echo PHP_EOL;

