<?php
echo PHP_EOL;

$livre = "Les Misérables:Victor Hugo:1862:Roman historique:978-0-679-60129-2";

// 1. Extraire et afficher les informations du livre
// Utiliser la fonction explode

$livre_tab=explode(":",$livre);
foreach ($livre_tab as $info){
    echo "$info ";
}
echo PHP_EOL;

// 2. Utiliser la fonction list

list($titre,$auteur,$annee,$genre,$isbn) = explode(':',$livre);
echo " $titre $auteur $annee $genre $isbn";
echo PHP_EOL;

//3. Utiliser le destructuring (à partir de la 7.1)

[$titre,$auteur,$annee,$genre,$isbn] = explode(':',$livre);
echo "  $titre $auteur $annee $genre $isbn";
echo PHP_EOL;

//4. Afficher le titre et l'année de publication

echo PHP_EOL;
$livre_tab=explode(":",$livre);
echo "$livre_tab[0] paru en $livre_tab[2]";
echo PHP_EOL;

// Utiliser list()

list($titre,$auteur,$annee,$genre,$isbn) = explode(':',$livre);
echo "$titre paru en $annee";
echo PHP_EOL;

// Utiliser le destructuring

[$titre,,$date_pubi]=explode(':',$livre);
echo "$titre paru en $date_pubi";
echo PHP_EOL;

// Afficher l'auteur du livre

[,$auteur]=explode(":",$livre);
echo $auteur;
echo PHP_EOL;

// Afficher ISBN du livre
[,,,,$isbn]=explode(":",$livre);
echo $isbn;
echo PHP_EOL;

