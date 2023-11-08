<?php

$nom=readline("Entrer la nationnalité de l'équipe : ");

$equipes=['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];

foreach($equipes as $n){
    if ($n==$nom){
        echo "1)  L'équipe $nom joue à la prochaine coupe du monde";
    }
}

echo PHP_EOL;

if (array_key_exists($nom, $equipes)){
    echo "2) L'équipe $nom joue à la prochaine coupe du monde";
}
