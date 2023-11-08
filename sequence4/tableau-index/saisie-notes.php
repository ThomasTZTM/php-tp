<?php

$notes=[];
while (true){
    $note=readline("Entrer une note (q pour arrêter) : ");
    while ($note>20 or $note<0){
        echo "Erreur de format !";
        $note=readline("Entrer une note (q pour arrêter) : ");
    }
    $notes[]=
}
