<?php

$cpt=0;
$notes=[10,12.5,14,7,15,9.5,8];
foreach($notes as $element){
    $cpt=$cpt+$element;
}
$taille=count($notes);
$resu=$cpt/$taille;

echo "La moyenne de l'élève est de $resu /20";
echo PHP_EOL;

if($resu<10){
    echo "Vous n'avez pas votre diplôme";
}elseif ($resu>=10 and $resu<12) {
    echo "Mention passable";
}elseif ($resu>=12 and $resu<14){
    echo "Mention assez bien";
}elseif ($resu>=14 and $resu<16){
    echo "Mention bien";
}elseif ($resu>=16){
    echo "Mention très bien bien";
}