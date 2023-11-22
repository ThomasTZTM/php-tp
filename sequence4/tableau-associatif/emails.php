<?php

$emails=[
    "Nicole"=>"thomasnicole@discord.gg",
    "Person"=>"etanpierson@discord.gg",
    "Tiatia"=>"tiatia@gmail.com"
];

$entrer=readline("Entrer un domaine : ");
echo PHP_EOL;

foreach ($emails as $nom=>$ad_mail){
    if (strpos($ad_mail,$entrer)!=false){
        echo "$nom : $ad_mail \n";
    }
}


