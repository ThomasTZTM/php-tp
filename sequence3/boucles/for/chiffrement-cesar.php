<?php

$chaine=readline("Entrer votre phrase à crypter : ");
$taille_chaine=strlen($chaine);
$cle=readline("Entrer une clé : ");

// Lettre minuscule = 26
// Lettre majuscule = 26



for($i=0;$i<strlen($chaine);$i++){
    $car = substr($chaine, $i, 1);
    for ($a=1;$a<=$cle;$a++){
        $car ++;
    }
    echo $car." ";
}


