<?php

echo "La date d'aujourd'hui est : " . date("Y-m-d");
echo PHP_EOL ;
$heure = date("H:i:s");
echo "L'heure actuelle est : " . $heure;
echo PHP_EOL ;

if ((int)($heure[0]) >= 1){
    if ((int)($heure[1]) >= 2){
        echo "Bonsoir";
    }else{
        echo "Bonjour";
    }
}else{
    echo "Bonjour";
}

echo PHP_EOL;

if (date('H')>12){
    echo "Je vous souhaite une bonne après midi";
}else{
    echo "Je vous souhaite une bonne matiné";
}
