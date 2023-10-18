<?php

$tarif_minute_appel = 0.02;
$tarif_sms = 0.01;
$tarif_giga = 0.10;

echo "Nombre de minute d'appel utilisé (Valeur positive) :";
$appel_u = readline(" ");
echo "Nombre de sms envoyés (Valeur positive) :";
$sms_e = readline(" ");
echo "Quantité de Giga (Go) consommées (Valeur positive) :";
$giga_c = readline(" ");

echo PHP_EOL;
echo "_________________________________________________________";
echo PHP_EOL;
echo PHP_EOL;
echo "===> Vérification des informations";
echo PHP_EOL;

if ($appel_u > -1){
    echo " ";
}else{
    echo "\033[31m [Err587] Aucune valeur négative sont accepté pour le nombre de minute d'appel utilisé \033[0m";
    echo PHP_EOL;
    echo "Pour plus d'informations rendez-vous sur www.thomasethan-operateur.com/questions/";
    die();
}

if ($sms_e > -1){
    echo " ";
}else{
    echo "\033[31m [Err587] Aucune valeur négative sont accepté pour le nombre de minute d'appel utilisé \033[0m";
    echo PHP_EOL;
    echo "Pour plus d'informations rendez-vous sur www.thomasMethan-operateur.com/questions/";
    die();
}

if ($giga_c > -1){
    echo " ";
}else{
    echo "\033[31m [Err587] Aucune valeur négative sont accepté pour le nombre de minute d'appel utilisé \033[0m";
    echo PHP_EOL;
    echo "Pour plus d'informations rendez-vous sur www.thomasethan-operateur.com/questions/";
    die();
}

echo PHP_EOL;
echo "________________________ESTIMATION_______________________";
echo PHP_EOL;
echo PHP_EOL;
echo".";
sleep(1);
echo".";
sleep(1);
echo".";
sleep(1);
echo PHP_EOL;

$totala = ($appel_u*$tarif_minute_appel);
$totals=($sms_e*$tarif_sms);
$totalg=($giga_c*$tarif_giga);

$totalf=($totala+$totalg+$totals);

echo "Montant APPEL : $totala euros";
echo PHP_EOL;
echo "Montant SMS : $totals euros";
echo PHP_EOL;
echo "Montant GIGA : $totalg euros";
echo PHP_EOL;

echo PHP_EOL;
echo "Le total est de $totalf (prix défiant toute concurence)";
echo PHP_EOL;

echo PHP_EOL;
echo "____________________ CODE REDUCTION _______________________";
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
$code_reduction = "BenjaminPue";
echo "Entrer un code de réduction (Le code n'est pas du tout BenjaminPue) : ";
$reducode = readline(" ");


if ($code_reduction==$reducode){
    $redu = $totalf*0.59;
    echo("Le nouveau prix est de $redu €, Merci Inoxtag");
}else{
    echo("Mauvais code, le prix reste à $totalf");
}

echo PHP_EOL;
echo PHP_EOL;
echo "____________________ VOULEZ-VOUS SOUSCIRE ? _______________________";
echo PHP_EOL;
echo PHP_EOL;

echo "Oui / Non : ";
$souscrire = readline(" ");

if ($souscrire == "Oui"){
    echo "Vous allez etre mis en relation avec Syndie";
    echo".";
    sleep(1);
    echo".";
    sleep(1);
    echo".";
    sleep(1);
    echo PHP_EOL;
}else{
    echo "Merci de votre visite !";
    die();
}

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "Bonjour !";