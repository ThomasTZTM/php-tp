<?php

echo PHP_EOL ;
$jour = date("D");
echo "Le jour actuel est : " . $jour;

echo PHP_EOL;

if ($jour == "Sun"){
    echo "Je vous souhaite un bon week-end";
}elseif ($jour == "Sat"){
    echo "Je vous souhaite un bon dimanche";
}else{
    echo "Je vous souhaite une bonne journée";
}

