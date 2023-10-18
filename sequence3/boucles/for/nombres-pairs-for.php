<?php

for($i=1;$i<=100;$i++){
    if($i%2==0){
        echo $i." ";
    }
}

echo PHP_EOL;
echo PHP_EOL;

$k = readline("Entrer un bombre : ");

for($i=0;$i<=$k;$i++){
    if($i%2==0){
        echo $i." ";
    }
}