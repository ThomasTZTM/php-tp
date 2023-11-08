<?php

// Déclarer et initialiser un tableau contenant des notes

$notes = [15,"pierre",20,"gilbert",14,15]; // $notes = array(15,14,20);

// On accède à element qui se trouve à l'index 0 dans le tableau $notes


echo "\033[44m 1. Affichage manuel\033[0m \n";

echo $notes[0]. " ";
echo $notes[1]. " ";
echo $notes[2]. " ";

echo "\n \033[44m 2. Affichage boucle for\033[0m \n";

for($i=0;$i<=(count($notes)-1);$i++){   // ou for($i=0; i < count($notes); $i++)
    echo $notes[$i]. " ";
}

echo "\n \033[44m 3. Affichage boucle foreach\033[0m \n";


foreach($notes as $element){
    echo $element. " ";
}

echo "\n \033[44m 4. Affichage boucle for avec indice\033[0m \n";

for($i=0;$i<=(count($notes)-1);$i++){
    echo " Index : $i = ".$notes[$i]. " \n";
}

echo " \033[44m 5. Affichage boucle foreach avec indice\033[0m \n";

foreach($notes as $index => $element){
    echo "Index : ".$index." = ".$element. " \n";
}

echo " \033[44m 6. Test debug\033[0m \n";

print_r($notes);

echo " \033[44m 7. Test déverssage sur écran\033[0m \n";

var_dump($notes);

echo " \033[44m 8. Ajout dans tableau 1\033[0m \n";

echo "Le tableau avant changement est : 15,pierre,20,gilbert,14,15 \n";
//
$notes[]=20;
//
echo "Le tableau après changement est : ";
for($i=0;$i<=(count($notes)-1);$i++){
    echo "$notes[$i] ";
}

echo " \n\033[44m 8. Ajout dans tableau 2\033[0m \n";

echo "Le tableau avant changement est : 15,pierre,20,gilbert,14,15,20 \n";
//
array_push($notes, 30);
//
echo "Le tableau après changement est : ";
for($i=0;$i<=(count($notes)-1);$i++){
    echo "$notes[$i] ";
}