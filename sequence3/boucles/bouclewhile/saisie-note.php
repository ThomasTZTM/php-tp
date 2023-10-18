<?php

echo PHP_EOL;
//----------------------------------------------------------------------
//------------------------------ EXERCICE 1 ----------------------------
//----------------------------------------------------------------------
echo PHP_EOL;


$condition = 0;
while($condition == 0){
    echo "Entrer une note :";
    $note = readline(" ");
    echo PHP_EOL;
    if($note>20){
        echo "La note saisie est incorrecte";
        echo PHP_EOL;
    }else{
        echo "La note saisie est correcte !";
        echo PHP_EOL;
        $condition ++;
    }
}


echo PHP_EOL;
//----------------------------------------------------------------------
//------------------------------ EXERCICE 2 ----------------------------
//----------------------------------------------------------------------
echo PHP_EOL;


$condition = 0;
while($condition == 0){
    echo "Entrer une note :";
    $note = readline(" ");
    echo PHP_EOL;
    if($note>20 or $note<0){
        echo "La note saisie est incorrecte";
        echo PHP_EOL;
    }else{
        echo "La note saisie est correcte !";
        echo PHP_EOL;
        $condition ++;
    }
}