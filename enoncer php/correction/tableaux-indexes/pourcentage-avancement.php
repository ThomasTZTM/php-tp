<?php

// Remplissage du tableau avec 100 000 valeurs
$array = array_fill(0,100000,"valeur");

// Initialisation du total et du compteur de lignes */
$total = count($array);
$i = 0;

// Message de début de traitement
echo "\ndebut traitement\n";

// Boucle de traitement */
foreach ($array as $item)
{
    $i++;
    // Calcul du pourcentage de traitement */
    $pourcent = ceil(($i / $total) * 100);
    // Affichage du pourcentage de traitement */
    echo "En cours \033[31m ".$pourcent." % \033[0m \r";

}

// En sortie de boucle on affiche 100% en vert */
echo "\033[32m100 % \033[0m" . str_repeat(' ',20) . "\n";
echo "fin traitement\n";
echo PHP_EOL;
echo "$i valeurs ont été traitées !";
