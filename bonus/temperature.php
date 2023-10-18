<?php
echo PHP_EOL;
echo PHP_EOL;

echo "Bienvenue sur notre application de convertion des temperatures !";

echo PHP_EOL;
echo PHP_EOL;

echo "Veuillez rentrer votre mode :";
echo PHP_EOL;
echo "'C' pour convertir de Celsius à Fahrenheit";
echo PHP_EOL;
echo "'F' pour convertir de Fahrenheit à Celsius";
echo PHP_EOL;
echo "Votre choix est : ";
$choix = readline(" ");

echo PHP_EOL;
echo PHP_EOL;

if ($choix == "C"){
    echo "Entrer votre temperature : ";
    $temperature = readline(" ");
    echo PHP_EOL;
    echo PHP_EOL;
    echo "Calcul en cours";
    echo PHP_EOL;
    echo PHP_EOL;
    $temp = ($temperature*1.8)+32 ;
    echo "Votre température est de $temp °F ";
}else{
    echo "Entrer votre temperature : ";
    $temperature = readline(" ");
    echo PHP_EOL;
    echo PHP_EOL;
    echo "Calcul en cours";
    echo PHP_EOL;
    echo PHP_EOL;
    $temp = ($temperature-32)/1.8 ;
    echo "Votre température est de $temp °C ";
}