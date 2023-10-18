<?php

echo "Entrer votre poids en KG : ";
$poids = readline(" ");
echo PHP_EOL;
echo "Entrer votre taille en mètres : ";
$taille = readline(" ");
echo PHP_EOL;



if ($taille>0 and $poids>0){
    echo "Valeur correct";
}else{
    echo "Les valeurs négatives ne sont pas accepter";
    die();
}

echo PHP_EOL;

$t2 = $taille*$taille;
$imc = $poids/$t2;
echo "Votre imc est de : $imc";