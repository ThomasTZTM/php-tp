<?php

$cpt=0;
$notes=[10,12.5,14,7,15,9.5,8];
foreach($notes as $element){
    if ($element>$cpt){
        $cpt=$element;
    }
}

echo "1) La note la plus haute est $cpt \n";
$maxi=max($notes);
echo "2) La note la plus haute est $maxi \n";