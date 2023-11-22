<?php

$notes = [
    "TacosM" => 6,
    "TacosL" => 8,
    "TacosXL" => 10,
    "Boisson" => 2,
    "Frite" => 3,
    "Kebab" => 7,
    "MaxiKebab" => 8,
    "FormuleTacosXL" => 11,
    "FormuleMaxiKebab" => 9
];

$prix=array_sum($notes);
echo "Si on souhaite acheter tout les articles, cela coutera : $prix €.";