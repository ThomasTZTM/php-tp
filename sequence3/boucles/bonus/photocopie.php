<?php

// -------------------------------------------

echo "Entrer le nombre de photocopie : ";
$nombre_photocopie = readline(" ");
echo PHP_EOL;
echo PHP_EOL;

// -------------------------------------------

$dixp = 0.30;
$vingts = 0.25;
$audela = 0.20;

$cas = 0;
$total = 0;

// -------------------------------------------

if ($nombre_photocopie<11){
    $total = $nombre_photocopie*$dixp;
    echo "Le total est de $total €";
}elseif ($nombre_photocopie<31){
    $total = 10*$dixp;
    $nombre_photocopie = $nombre_photocopie - 10;
    $total = $total + ($nombre_photocopie*$vingts);
    echo "Le total est de $total €";
}else{
    $total = 10*$dixp;
    $nombre_photocopie = $nombre_photocopie - 10;
    if ($nombre_photocopie>20){
        $total = $total + (20*$vingts);
        $nombre_photocopie = $nombre_photocopie - 20;
        $total = $total + ($nombre_photocopie*$audela);
        if ($total>50){
            $total=$total*0.90;
            echo PHP_EOL;
            echo "Coupons de réduction appliqué";
            echo PHP_EOL;
        }
        echo "Le total est de $total €";
    }else{
        echo "Erreur";
    }
}

// -------------------------------------------

