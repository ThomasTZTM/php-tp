<?php

// Table des categories
$tableCategories = [
    "1" =>["libelle"=>"Informatique"],
    "2" =>["libelle"=>"Loisirs"],
    "3" =>["libelle"=>"Musique"],
    "4" =>["libelle"=>"Histoire"]
];

foreach ($tableCategories as $cle=>$test){
    echo $cle." ";
    foreach ($test as $elt){
        echo $elt." | ";
    }
}

$entrer=readline("Entrer une catégorie : ");
foreach ($tableCategories as $cle=>$test){
    foreach ($test as $elt){
        if ($elt == $entrer){
            $stock=$elt;
    }
    }
}