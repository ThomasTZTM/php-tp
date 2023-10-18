<?php

echo "Entrer une phrase : ";
$phrase = readline(" ");
$phrase = strtoupper($phrase);

$voyelles = "AEIOUY";

$taillep = strlen($phrase);
$taillev = strlen($voyelles);

$cpt = 0;

$inip = 0;
while($inip<$taillep){
    $iniv = 0;
    while ($iniv<$taillev){
        if ($phrase[$inip]==$voyelles[$iniv]){
            $cpt ++;
        }
        $iniv ++;
    }
    $inip ++;
}

echo PHP_EOL;
echo "Il y a $cpt voyelles dans la phrase";

