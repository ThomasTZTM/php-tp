<?php
echo PHP_EOL;

//---------------------------------------------------------------------------------
//------------------------ CREATION DES CONSTANTES DE BASE ------------------------
//---------------------------------------------------------------------------------

echo "Saisir un mot de passe : ";
$mdp = readline(" ");
echo PHP_EOL;
$taille_mdp = strlen($mdp);

//---------------------------------------------------------------------------------
//-------------------------- CREATION DES CONDITIONS ------------------------------
//---------------------------------------------------------------------------------

$condition1 = 0; // Fausse
$condition2 = 0; // Fausse
$condition3 = 0; // Fausse
$condition4 = 0; // Fausse

//---------------------------------------------------------------------------------
//------------------------------ TEST DES CONDITIONS ------------------------------
//---------------------------------------------------------------------------------

$cpt = 0;
while($cpt<$taille_mdp){
    $lettre_mdp = substr($mdp, $cpt, 1);
    //Test pour afficher les lettres qui passent dans les IF
    echo PHP_EOL;
    echo " ---> $lettre_mdp --->";
    echo PHP_EOL;
    //Condition de la taille
    if ($taille_mdp>7) {
        $condition1++;
    }
    //Condition des majuscules
    if (ctype_upper($lettre_mdp)){
        $condition2 ++;
    }
    //Condition des minuscules
    if (ctype_lower($lettre_mdp)){
        $condition3 ++;
    }
    //Condtition des chiffres
    if (is_numeric($lettre_mdp)){
        $condition4 ++;
    }
    // Passe à la prochaine lettre
    $cpt ++;
}

//---------------------------------------------------------------------------------
//----------------------------- RESULTATS DES CONDITIONS --------------------------
//---------------------------------------------------------------------------------

echo "Résultat des conditions $condition1 $condition2 $condition3 $condition4";

echo PHP_EOL;
echo PHP_EOL;
if (($condition1>0) and ($condition2>0) and ($condition3>0) and ($condition4>0)){
    echo "\x1b[42m Mot de passe correcte ! \033[0m";
}else{
    echo "\033[31m Mot de passe invalide ! \033[0m";
}


