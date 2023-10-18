<?php

echo "Entrer une phrase : ";
$phrase = readline(" ");

$taillep = strlen($phrase);

$ini = 0;
$newphrase = "";
while ($ini<$taillep){
    $lalettreindice = (substr($phrase, $taillep-($ini+1), 1));
    $newphrase="$newphrase$lalettreindice";
    $ini = $ini +1;
}

echo PHP_EOL;
echo "La nouvelle phrase est : $newphrase";

