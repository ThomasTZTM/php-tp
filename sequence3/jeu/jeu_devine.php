<?php
echo PHP_EOL;

//---------------------------------------------------------------------------------
//--------------------------------- MENU ACCEUIL ----------------------------------
//---------------------------------------------------------------------------------

echo "Bienvenue dans le jeu de devinette !";
echo PHP_EOL;
echo "Le but du jeu est de deviner un nombre entre 1 et 100.";
echo PHP_EOL;
echo "Vous avez 10 à 15 essais pour trouver le nombre";
echo PHP_EOL;
echo "Bonne chance!";
echo PHP_EOL;

echo PHP_EOL;

echo "1. Jouer";
echo PHP_EOL;
echo "2. Voir les résultats";
echo PHP_EOL;
echo "3. Voir les résultats d'un jour";
echo PHP_EOL;
echo "4. Voir les résultats d'un joueur";
echo PHP_EOL;
echo "5. Quitter";
echo PHP_EOL;
echo "Votre choix (1,2,3,4 ou 5) : ";
$choixmenu = readline(" ");
echo PHP_EOL;

//---------------------------------------------------------------------------------
//--------------------------------- MENU ACCEUIL ----------------------------------
//---------------------------------------------------------------------------------
// Choix du jeu
if ($choixmenu==1){
    echo "C'est partie !";
    echo PHP_EOL;
    echo PHP_EOL;
// Choix des résultat
}elseif ($choixmenu==2){
    echo "\033[44m Voici les résultats : \033[0m";
    echo PHP_EOL;
    $path = fopen("resultat.txt", "r");
    while (!feof($path)) {
        echo fgets($path);
    }
    fclose($path);
    echo PHP_EOL;
    die();
// Choix des résultats (jour)
}elseif ($choixmenu==3){
    $date = readline("Entrez la date au format JJ/MM/AAAA : ");
    echo PHP_EOL;
    $path = fopen("resultat.txt", "r");
    while (!feof($path)) {
        $line = fgets($path);
        if (strpos($line, $date) !== false) {
            echo $line;
        }
    }
    fclose($path);
    echo PHP_EOL;
    die();
// Choix des résultats (joueur)
}elseif ($choixmenu==4){
    echo "\033[44m Voir les résultats pour un joueur spécifique : \033[0m";
    $pseudoverif = readline("Entrez le pseudo du joueur : ");
    echo PHP_EOL;
    $path = fopen("resultat.txt", "r");
    while (!feof($path)) {
        $line = fgets($path);
        if (strpos($line, "Pseudo: " . $pseudoverif) !== false) {
            echo $line;
        }
    }
    fclose($path);
    echo PHP_EOL;
    die();
// QUITTER
}else{
    echo PHP_EOL;
    die();
}

//---------------------------------------------------------------------------------
//------------------------------- INITIALISATION  ---------------------------------
//---------------------------------------------------------------------------------

echo "\033[44m Entrer un pseudo : \033[0m";
$pseudo = readline(" ");
echo PHP_EOL;
echo PHP_EOL;

$nombre_machine = rand(1, 100);

$recherche = 0;
$tentative = 0;
$nb_tentative = rand(10,15);
echo PHP_EOL;
echo "Vous avez $nb_tentative chance pour trouver le nombre mystère";
echo PHP_EOL;
//$nb_tentative = 200;

//---------------------------------------------------------------------------------
//------------------------------------- JEU ---------------------------------------
//---------------------------------------------------------------------------------


while ($tentative<($nb_tentative)){
    if ($tentative<($nb_tentative)){
        echo PHP_EOL;
        echo "\033[44m Entrer un nombre entre 1 et 100 : \033[0m";
        $recherche = readline(" ");

        while ($recherche<1 or $recherche>100){
            echo PHP_EOL;
            echo "\033[41m Mauvais format, le nombre doit être en 1 et 100 \033[0m";
            echo PHP_EOL;
            echo "\033[44m Entrer un nombre entre 1 et 100 : \033[0m";
            $recherche = readline(" ");
        }

        // Comparaison nombre
        if ($recherche<$nombre_machine){
            echo PHP_EOL;
            echo "\033[36m Le nombre $recherche est trop petit \033[0m";
            echo PHP_EOL;
            $tentative ++;
            $tt = $nb_tentative-$tentative;
            echo "Il vous reste $tt tentative";
            echo PHP_EOL;
        }elseif ($recherche>$nombre_machine){
            echo PHP_EOL;
            echo "\033[34m Le nombre $recherche est trop grand \033[0m";
            echo PHP_EOL;
            $tentative ++;
            $tt = $nb_tentative-$tentative;
            echo "Il vous reste $tt tentative";
            echo PHP_EOL;
        }else{
            echo PHP_EOL;
            echo PHP_EOL;
            $tentative ++;
            $tt = $nb_tentative-$tentative;

            if ($tentative<=10){
                echo "\033[42m Exellent $pseudo : vous avez trouvé le nombre $nombre_machine en $tentative tentatives ! \033[0m";
                $result = date('d/m/Y \à h:i:s') . " - Pseudo: " . ($pseudo) . " - Résultat: Excellent! Vous avez trouver le nombre $nombre_machine en " . ($tentative) . " essais.\n";
            }else{
                echo "\033[42m Bien joué $pseudo : vous avez trouvé le nombre $nombre_machine en $tentative tentatives ! \033[0m";
                $result = date('d/m/Y \à H:i:s') . " - Pseudo: " . ($pseudo) . " - Résultat: Bien joué! Vous avez trouver le nombre $nombre_machine en " . ($tentative) . " essais.\n";
            }
            echo PHP_EOL;
            echo PHP_EOL;
            echo PHP_EOL;
            $path = fopen("resultat.txt", "a+");
            fwrite($path, $result);
            $press = 0;
            fclose($path);
            die();
        }
        //

    }
}



echo PHP_EOL;
echo PHP_EOL;
echo "\033[41m Vous avez PERDU ! \033[0m";
$result = date('d/m/Y \à h:i:s') . " - Pseudo: " . ($pseudo) . " - Résultat: Perdu! Le nombre a deviner était" . ($nombreADeviner) . "\n";
$path = fopen("resultat.txt", "a+");
fwrite($path, $result);
$press = 0;
fclose($path);

die();
//---------------------------------------------------------------------------------
//---------------------------------- COULEUR --------------------------------------
//---------------------------------------------------------------------------------

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

// Texte gras et souligné
//$boldText = "$bold Texte en gras$reset";
//$underlinedText = "$underline Texte souligné$reset";
