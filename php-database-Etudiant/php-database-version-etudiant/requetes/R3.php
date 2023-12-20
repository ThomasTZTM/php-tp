<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/**
 * @var $tableArticles
 * @var $tableCategories
 */

/*
 * Test requête R3
*/

$x=ordonner_bibliotequaire($tableArticles, $tableCategories);
foreach ($x as $tableau){
    echo "############################# \n";
    foreach ($tableau as $libbeller=>$contenue){
        echo "$libbeller => $contenue \n";
    }
}