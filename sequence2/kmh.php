<?php

echo "Saisir la distance du trajet (kms) : ";
$distance = readline("Saisir la distance du trajet (kms) : ");
echo "Saisir la durée du trajet (h:mm): ";
$duree = readline("Saisir la durée du trajet (hh:mm): ");



$taille2 = strlen($duree);
if ($taille2==4){
    $varrandom1="$duree[0]:$duree[2]$duree[3]";
    $varrandom2="$duree";
    if ($varrandom1==$varrandom2){
        echo "\x1b[42m FORMAT CORRECT \033[0m";
    }else{
        echo "\033[31mMAUVAIS FORMAT\033[0m";
        die();
    }
}else{
    if ($taille2==5){
        $varrandom1="$duree[0]$duree[1]:$duree[3]$duree[4]";
        $varrandom2="$duree";
        if ($varrandom1==$varrandom2){
            echo "\x1b[42m FORMAT CORRECT \033[0m";
        }else{
            echo "\033[31mMAUVAIS FORMAT\033[0m";
            die();
        }
    }else{
        echo "\033[31mMAUVAIS FORMAT\033[0m";
        die();
    }
}


echo PHP_EOL;

$heure = substr($duree,0,1);
$minute = substr($duree,2,2);
if ($minute>59) {
    echo "\033[31m ERREUR : la durée $duree est invalide ! \033[0m";
} else {
    $heure = intval($heure) + (intval($minute)/60);
    $vitesse = ROUND(intval($distance)/$heure);
    echo "La vitesse moyenne du trajet est de $vitesse km/h";
    echo PHP_EOL;
    if ($vitesse < 90) {
        echo "\x1b[42m Vous êtes en-dessous des 90km/h \033[0m";
    } elseif ($vitesse > 90) {
        echo "\x1b[41m Vous êtes au-dessus des 90km/h \033[0m";
    } else {
        echo "\x1b[42m Vous êtes à 90km/h \033[0m";
    }
}




