<?php
$prog = 0;
$t = 0;
$a = array_fill(0,10000000,5);
echo "debut du traitement\n";
echo "En cours \n";
foreach ($a as $item){
    $prog++;
    if(round((100*$prog)/10000000)<>$t){
        $val=round((100*$prog)/10000000);
        if ($val<100){
            echo "\033[41m$val%\033[0m \n";
        }
        if ($val==100){
            echo "\033[42m$val%\033[0m\n";
        }
    }
    $t = round((100*$prog)/10000000);
}
echo "\n10000000 valeur on été traitées !";


// \033[42m \033[0m = vert
// \033[41m \033[0m= rouge






