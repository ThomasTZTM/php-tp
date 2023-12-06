<?php

// Inclure le fichier dans lequel se trouve la fonction "est_pair"

require 'cours-fonction.php';
//include 'cours-fonction.php';

$entrer = readline("Entrer un nombre : ");

if (est_pair($entrer)){
    echo "Le nombre $entrer est paire ";
}else{
    echo "Le nombre $entrer est impaire";
}

