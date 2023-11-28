<?php

$equipes = ['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];
$equipeRecherche = readline("Saisir une équipe :");
// Mettre la première lettre en majuscule et les autres en minuscules
$equipeRecherche = ucfirst(strtolower($equipeRecherche));

// -------------------------------------------------------------
// Recherche de l'équipe dans le tableau
// -------------------------------------------------------------
$trouve=false;
foreach ($equipes as $equipe) {
    if ($equipe === $equipeRecherche) {
        $trouve = true;
        break;
    }
}
if ($trouve) {
    echo ("$equipeRecherche sera présente à la prochaine coupe du monde !");
} else {
    echo ("$equipeRecherche ne sera pas présente à la prochaine coupe du monde !");
}

echo PHP_EOL;

// -------------------------------------------------------------
// Recherche de l'équipe dans le tableau avec in_array()
// -------------------------------------------------------------
if ( in_array($equipeRecherche,$equipes)) {
    echo ("$equipeRecherche sera présente à la prochaine coupe du monde !");
} else {
    echo("$equipeRecherche ne sera pas présente à la prochaine coupe du monde !");
}



