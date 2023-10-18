<?php

echo "Entrer votre age (exemple : 25) :";
$age = readline(" ");

echo "Entrer votre sexe (Format : M/F/O) :";
$sexe = readline(" ");

if ($sexe=="M"){
    if ($age > 22){
        echo "Vous devez payer la surprime";
    }else{
        echo "Vous ne devez pas payer la surprime";
    }
}elseif ($sexe=="F"){
    if ($age < 31 and $age > 19){
        echo "Vous devez payer la surprime";
    }else{
        echo "Vous ne devez pas payer la surprime";
    }
}else{
    echo "Vous allez payer toute votre vie il faut faire un choix sur votre sexe";
}