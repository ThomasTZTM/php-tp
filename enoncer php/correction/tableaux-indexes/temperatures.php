<?php

$temperatures = [12,15,-2,8,7,9,3,25];

// Convertir chaque température de degrés Celsius en degrés Fahrenheit
foreach ($temperatures as $index => $temperature) {
    $temperatures[$index] = $temperature * 9 / 5 + 32;
}

// Afficher les températures
echo "Les températures sont : ";
foreach ($temperatures as $temperature) {
    echo $temperature . ' ';
}