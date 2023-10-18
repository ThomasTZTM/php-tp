<?php

echo "Saisir un nombre entier :";
$nombre1 = readline(" ");


echo "Saisir un nombre entier :";
$nombre2 = readline(" ");

if ($nombre2!=0){
    $resultat = round($nombre1/$nombre2,2);
    echo "Le résultat de la division de $nombre1 par $nombre2 est $resultat";
}else{
    echo "Erreur, la valeur zéro n'est pas disponible dans la deuxième insertion";
}
