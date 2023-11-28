<?php
$contacts = [
    "Mael" => "0568421232",
    "Thomas" => "0381526954",
    "Phong" => "0407899521",
    "Khang" => "0762189523"
];
$entrer = readline("Entrer un nom : ");
echo PHP_EOL;
$list_num=[];
$resu=0;
foreach ($contacts as $nom => $numeros) {
    if ($nom==$entrer){
        $resu = $resu + 1;
        $list_num[]=$numeros;
    }
}
foreach ($list_num as $lm){
    echo $lm." ";
}
if ($resu<1){
    echo "Ce contact n'existe pas !";
}

