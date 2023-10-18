<?php

// Afficher si le mot contient plus de 5 lettre

echo "Saisir un mot :";
$mot = readline(" ");

if((strlen($mot))>=5){
    echo "Le mot à plus de 5 lettres";
}else{
    echo "Le mot à moins de 5 lettres";
}