<?php

$notes=[];
$sup10=[];
$moy=0;
$cpt=0;
$notesupa10=0;
$rep=true;
while ($rep==true){
    $note=readline("Entrer une note (q pour arrêter) : ");
    if ($note == "q"){
        $rep = false;
        echo "\nLes notes saisies sont : ";
        foreach($notes as $n){
            echo " $n ";
            if($n>=10){
                $sup10[]=$n;
                $cpt++;
                $moy=$moy+$n;
                $notesupa10++;
            }
        }
    }else{
        while ($note>20 or $note<0){
            echo "Erreur de format ! \n";
            $note=readline("Entrer une note (q pour arrêter) : ");
        }
    }
    $notes[]=$note;
}
if ($notesupa10>0){
    $moy=$moy/$cpt;
    echo "\nLa moyenne des notes supérieur ou égales à 10 est : $moy";
}else{
    echo "\nIl n'y a aucune moyenne supérieur à 10 !";
}