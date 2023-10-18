<?php

//----------------------------------------------------------------------
//------------------------------ SANS BOUCLE ---------------------------
//----------------------------------------------------------------------

// compte de 1 à 8

echo 1 . ' ';
echo 2 . ' ';
echo 3 . ' ';
echo 4 . ' ';
echo 5 . ' ';
echo 6 . ' ';
echo 7 . ' ';
echo 8 . ' ';

echo PHP_EOL;

//----------------------------------------------------------------------
//------------------------------ BOUCLE WHILE --------------------------
//----------------------------------------------------------------------

// compter de 1 à 8 avec while

//définit une var du nbr
$nbr = 1;

//boucle while
while ($nbr <= 100) {
    //affichage du nombre
    echo $nbr. ' ';
    //on passe au nombre suivant
    $nbr = $nbr + 1;
    //ou
    //$nbr ++;
    //ou
    //$nbr += 1;
}

//On sort de la boucle

echo PHP_EOL;

echo "Le comptage est terminé";

if (str_contains("A", $maj)){
    echo "OOOOOOOOOO";
}