<?php

echo PHP_EOL;
//----------------------------------------------------------------------
//------------------------------ EXERCICE 1 -----------------------------
//----------------------------------------------------------------------
echo PHP_EOL;

echo "Saisir un nombre entre 0 et 1000 : ";
$nombre_utilisateur = readline(" ");

$tentative=0;
$condition=0;

while($condition == 0){
    $nombre_ordinateur = random_int(0,1000);
    if ($nombre_utilisateur==$nombre_ordinateur){
        $tentative ++;
        echo "La machine à été trouvé en $tentative coups";
        $condition ++;
    }else{
        $tentative ++;
    }
}

echo PHP_EOL;
//----------------------------------------------------------------------
//------------------------------ EXERCICE 2 ----------------------------
//----------------------------------------------------------------------
echo PHP_EOL;

echo "Saisir un nombre entre 0 et 1000 : ";
$nombre_utilisateur = readline(" ");

$tentative=0;
$condition=0;

while($condition == 0){
    $nombre_ordinateur = random_int(0,1000);
    if($tentative<200){
        if ($nombre_utilisateur==$nombre_ordinateur){
            $tentative ++;
            echo "La machine à été trouvé en $tentative coups";
            $condition ++;
        }else{
            $tentative ++;
        }
    }else{
        echo "Tu n'as pas deviné en moins de 200 coups";
        die();
    }
}