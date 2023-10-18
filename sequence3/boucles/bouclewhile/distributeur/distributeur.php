<?php
echo PHP_EOL;
echo PHP_EOL;

$fondRouge = "\033[41m";
$texteRouge = "\033[31m";
$fondVert = "\033[42m";
$texteVert = "\033[32m";
$normal = "\033[0m";

//• Eau : 1,20€
//• Soda : 3€
//• Café : 2€

//---------------------------------------------------------------------------------
//----------------------- AFFICHAGE DE LA CARTE DES BOISSONS ----------------------
//---------------------------------------------------------------------------------

echo "Bienvenue dans notre distributeur E-thomas";
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

echo $fondVert." [CODE : 001] EAU ".$normal;
echo PHP_EOL;
echo $fondVert." 3,30€ ".$normal;
$eau = "Eau";
$prixeau = 3.30;

echo PHP_EOL;
echo PHP_EOL;

echo $fondVert." [CODE : 002] COCA ".$normal;
echo PHP_EOL;
echo $fondVert." 2,30€ ".$normal;
$coca = "Coca Cola";
$prixcoca = 2.30;

echo PHP_EOL;
echo PHP_EOL;

echo $fondVert." [CODE : 003] CAFE ".$normal;
echo PHP_EOL;
echo $fondVert." 1,30€ ".$normal;
$cafe = "Café";
$prixcafe = 1.30;

echo PHP_EOL;
echo PHP_EOL;
//---------------------------------------------------------------------------------
//------------------ PRISE DE LA COMMANDE DU CLIENT ET PAIEMENT -------------------
//---------------------------------------------------------------------------------

echo "Entrer le numéro de votre consommation : ";
$no_conso = readline(" ");

if ($no_conso==1) {
    $donation = $eau;
    echo PHP_EOL;
    echo "Paiement de 3,30€ merci d'entré votre monnaie :";
    $paiement = readline(" ");
    if ($paiement > $prixeau) {
        $monnaierendu = $paiement - $prixeau;
        echo PHP_EOL;
        echo "Voici votre monnaie : $monnaierendu";
        echo PHP_EOL;
        echo "Réceptionner votre commande";
    } elseif ($paiement == $prixeau) {
        echo PHP_EOL;
        echo "Réceptionner votre commande";
    } else {
        while ($paiement < $prixeau) {
            $rajout = readline(" ");
            $paiement = $paiement + $rajout;
        }
        if ($paiement > $prixeau) {
            $monnaierendu = $paiement - $prixeau;
            echo PHP_EOL;
            echo "Voici votre monnaie : $monnaierendu";
            echo PHP_EOL;
            echo "Réceptionner votre commande";
        } else {
            echo PHP_EOL;
            echo "Réceptionner votre commande";
        }
    }
}

//---------------------------------------------------------------------------------
//----------------------- PAIEMENT DE LA COMMANDE DU CLIENT -----------------------
//---------------------------------------------------------------------------------


//---------------------------------------------------------------------------------
//----------------------- DONNATION DE LA COMMANDE AU CLIENT ----------------------
//---------------------------------------------------------------------------------


        echo PHP_EOL;
        echo PHP_EOL;

// Couleurs du texte
//$blackText = "\033[30mTexte en noir$reset";
//$redText = "\033[31mTexte en rouge$reset";
//$greenText = "\033[32mTexte en vert$reset";
//$yellowText = "\033[33mTexte en jaune$reset";
//$blueText = "\033[34mTexte en bleu$reset";
//$magentaText = "\033[35mTexte en magenta$reset";
//$cyanText = "\033[36mTexte en cyan$reset";
//$whiteText = "\033[37mTexte en blanc$reset";

// Arrière-plans
//$blackBackground = "\033[40mFond en noir$reset";
//$redBackground = "\033[41mFond en rouge$reset";
//$greenBackground = "\033[42mFond en vert$reset";
//$yellowBackground = "\033[43mFond en jaune$reset";
//$blueBackground = "\033[44mFond en bleu$reset";
//$magentaBackground = "\033[45mFond en magenta$reset";
//$cyanBackground = "\033[46mFond en cyan$reset";
//$whiteBackground = "\033[47mFond en blanc$reset";

