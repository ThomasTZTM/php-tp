<?php

/********************************************************************
 * Ce fichier PHP contient la liste des fonctions permettant de
 * simuler les requêtes dans la base de données
 *******************************************************************/

/* Requête R1
 * Récupérer les articles actifs (articles à afficher)
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article

function rechercherArticlesActifs(array $tableArticle) : array {
    $resultats = [];
    foreach ($tableArticle as $cleA=>$Article) {
        foreach ($Article as $Libeller => $description) {
            if ($Libeller=="titre" or $Libeller=="" or $Libeller==)  {
                $resultats[]=$description;
            }
            $resultats[]=$cleA;
        }
    }
    return $resultats;
}
*/
/* Requête R2
 * Récupérer les articles d'une catégorie donnée
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article
*/
// PLACER ICI VOTRE FONCTION

function afficherArticleAvecCategorie(array $tableArticle, array $tableCategorie, string $entrer) : array{
    $reponse = [];
    foreach ($tableCategorie as $cle=>$arrayCategorie){
        foreach ($arrayCategorie as $Categorie){
            if ($Categorie == $entrer){
                $stock=$cle;
            }
        }
    }
    foreach ($tableArticle as $cleA=>$Article){
        foreach ($Article as $Libeller=>$description){
            if ($Article["id_categorie"]==number_format($stock)){
                $chara = " $Libeller = $description | ";
                echo "$chara \n";
                $reponse[]=$chara;
            }
        }
    }
    return $reponse;
}



/* Requête R3
 * Récupérer l'ensemble des articles
 * On souhaite récupérer l'id, le titre, le contenu, la date de création et le nom de la catégorie de chaque article
*/
// PLACER ICI VOTRE FONCTION


/* Requête R4
 * Récupérer les articles dont la date de création est supérieure à une date donnée
 * On souhaite récupérer l'id, le titre, le contenu, la date de création, le prénom et le nom de l'auteur de
 * chaque article
*/
// PLACER ICI VOTRE FONCTION


/* Requête R5
 * Récupérer les articles à afficher ordonnés sur le titre (ordre alphabétique)
 * On souhaite récupérer l'id, le titre, la date de création et le libellé de la catégorie de chaque article
*/
// PLACER ICI VOTRE FONCTION

function ordonner_bibliotequaire($tableArticle, $tableCategorie): array{
    $resultats=[];

    function avoirLibeller($arryCategorie,$id):string{
        foreach ($arryCategorie as $ids=>$tab){
            foreach ($tab as $idCategorie=>$contenue){
                if($id==$ids){
                    $resultat=$contenue;
                }
            }
        }
        return $resultat;
    }

    foreach ($tableArticle as $idarticle=>$tableau){
        $reponse=[];
        $reponse["ID Article"]=$idarticle;
        foreach ($tableau as $LibellerCategorie=>$contenu){
            if ($LibellerCategorie=="id_categorie"){
                $reponse["Categorie"]=avoirLibeller($tableCategorie,$contenu);
            }else{
                if ($LibellerCategorie=="contenu" or $LibellerCategorie=="actif" or $LibellerCategorie=="id_auteur"){
                    echo"";
                }else{
                    $reponse[$LibellerCategorie]=$contenu;
                }
            }
        }
        $resultats[]=$reponse;
    }
    return $resultats;
}


/* Requête R6
 * Récupérer le nombre d'articles postés par un auteur donné (id_auteur)
*/
// PLACER ICI VOTRE FONCTION


/* Requête R7
 * Récupérer le nombre d'articles postés par chaque auteur
 * On souhaite récupérer l'id, le prénom, le nom et le nombre d'articles ce chaque auteur
*/
// PLACER ICI VOTRE FONCTION


