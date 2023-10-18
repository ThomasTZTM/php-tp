<?php
$normal = "\033[0m";
$texteRouge = "\033[31m";
echo "Saisir une heure (Format : hh:mm) :";
echo PHP_EOL;
$temp = readline("Saisir une heure(hh:mm) ");
$lesPetitPoint = substr($temp,2,1);
$heure = substr( $temp,0,2);
$minute = substr( $temp,3,2);
if ($lesPetitPoint <> ":" or strlen($minute)<>2){
    echo $texteRouge."Le format de l'heure n'est pas bon.".$normal;
} else{
    if ($minute>59) {
        echo $texteRouge . "Les minutes sont jusqu'a 59" . $normal;
    }
    if ($heure >= 9 && $heure < 12){
        echo "Le magasin est ouvert!";
    } elseif ($heure >=14 && $heure<19){
        echo "Le magasin est ouvert!";
    } else {
        echo "Le magasin est fermé!";
    }
}
