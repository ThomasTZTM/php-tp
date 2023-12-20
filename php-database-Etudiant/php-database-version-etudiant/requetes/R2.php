<?php


/**
 * @var $tableArticles
 * @var $tableCategories
 */
require_once "../base-de-donnees/tableArticle.php";
require_once "../base-de-donnees/tableAuteur.php";
require_once "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/*
 * Test requête R2
*/


$entrer=readline("Entrer une catégorie : ");
afficherArticleAvecCategorie($tableArticles, $tableCategories, $entrer);



