<?php

$n=readline("Entrer un nombre : ");

for($i=1;$i<=20;$i++){
    echo $n." ";
    if ($n%2==0){
        $n=$n/2;
    }else{
        $n=$n*3;
        $n++;
    }
}
