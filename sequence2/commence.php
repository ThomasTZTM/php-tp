<?php

// Demander la saisie d'un mot et afficher si le mot commence par la lettre P

echo "Saisir un mot :";
$mot = readline(" ");

if(str_starts_with(strtolower($mot), "p")){
    echo "Le mot commence bien par P";
}else{
    echo "Faux";
}

echo PHP_EOL;

if((strlen($mot))>4){
    echo "Le mot à plus de 5 lettres";
}else{
    echo "Le mot à moins de 5 lettres";
}