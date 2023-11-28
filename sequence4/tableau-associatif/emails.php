<?php

$emails=[
    "Nicole"=>"thomasnicole@discord.gg",
    "Person"=>"etanpierson@discord.gg",
    "Tiatia"=>"tiatia@gmail.com"
];

$entrer=readline("Entrer un domaine : ");
echo PHP_EOL;

$list_mail=[];
foreach ($emails as $nom=>$ad_mail){
    if (strpos($ad_mail,$entrer)!=false){
        $list_mail[]=$nom;
    }
}

foreach ($list_mail as $lm){
    echo $lm." ";
}


