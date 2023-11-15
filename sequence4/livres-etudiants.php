<?php
function cherchelivres($nb_livre){

    global $livres;
    $infolivre=[];

    ################# NOM DU LIVRE
    $position_nomlivre = strpos(($livres[$nb_livre]), ":");
    $nomdulivre = substr($livres[$nb_livre], 0, $position_nomlivre);
    $infolivre[]=$nomdulivre;
    //echo "\n Nom du livre : $nomdulivre";

################# NOM DE L'AUTEUR
    $nv_nomauteur=substr($livres[$nb_livre],$position_nomlivre+1,(strlen($livres[$nb_livre])-$position_nomlivre));
    $position_nomAuteur = strpos($nv_nomauteur, ":");
    $nomdeAuteur = substr($nv_nomauteur, 0, $position_nomAuteur);
    $infolivre[]=$nomdeAuteur;
    //echo "\n Nom Auteur : $nomdeAuteur";

################# DATE LIVRE
    $nv_date=substr($livres[$nb_livre],$position_nomAuteur+$position_nomlivre+2,(strlen($livres[$nb_livre])-$position_nomAuteur));
    $position_date = strpos($nv_date, ":");
    $date_livre = substr($nv_date, 0, $position_date);
    $infolivre[]=$date_livre;
    //echo " \n Date : $date_livre";

################# GENRE
    $nv_genre=substr($livres[$nb_livre],$position_nomAuteur+$position_nomlivre+$position_date+3,(strlen($livres[$nb_livre])-$position_date));
    $position_genre = strpos($nv_genre, ":");
    $genre_livre = substr($nv_genre, 0, $position_genre);
    $infolivre[]=$genre_livre;
    //echo " \n Genre : $genre_livre";

################# CODE
    $nv_code=substr($livres[$nb_livre],$position_nomAuteur+$position_nomlivre+$position_date+$position_genre+4,(strlen($livres[$nb_livre])-$position_genre));
    $position_code = strlen($livres[$nb_livre]);
    $code_livre = substr($nv_code, 0, $position_code);
    $infolivre[]=$code_livre;
    //echo " \n Code : $code_livre";

    //foreach ($infolivre as $i)
        //echo $i;

    return $infolivre;
}

$infolivre=[];
$livres = [
    "Les Misérables:Victor Hugo:1862:Roman historique:978-0-679-60129-2",
    "Notre-Dame de Paris:Victor Hugo:1831:Roman gothique:978-0-679-60136-0",
    "Le Comte de Monte-Cristo:Alexandre Dumas:1844:Roman d'aventure:978-0-679-60130-8",
    "Les Trois Mousquetaires:Alexandre Dumas:1844:Roman d'aventure:978-0-679-60137-7",
    "Madame Bovary:Gustave Flaubert:1857:Roman réaliste:978-0-679-60131-5",
    "L'Éducation sentimentale:Gustave Flaubert:1869:Roman:978-0-679-60138-4",
    "Le Petit Prince:Antoine de Saint-Exupéry:1943:Roman:978-2-07-040850-4",
    "Vol de nuit:Antoine de Saint-Exupéry:1931:Roman:978-2-07-040851-1",
    "Candide:Voltaire:1759:Conte philosophique:978-0-679-60132-2",
    "Zadig:Voltaire:1747:Conte philosophique:978-0-679-60139-1"
];

$taille=count($livres);


while (true) {  // Utiliser comme boucle infinie afin de pouvoir rejouer en cas d'envie
    echo "\n1. \033[33mAfficher la liste des livres\033[0m.\n";
    echo "2. Rechercher un livre par \033[33mauteur\033[0m.\n";
    echo "3. Modifier \033[33ml'année de parution\033[0m d'un livre.\n";
    echo "4. Rechercher des livres par \033[33mplage d'années\033[0m.\n";
    echo "5. Rechercher des livres par \033[33mmot clé\033[0m dans le titre.\n";
    echo "6. \033[33mAfficher tout les genres\033[0m\n";
    echo "7. Afficher le nombre de livres \033[33mpour un auteur donné\033[0m.\n";
    echo "8. Quitter.\n";
    $choixmenu = readline("Votre \033[33mchoix\033[0m (1,2,3,4,5,6,7 ou 8) : ");
    echo PHP_EOL;


if ($choixmenu==1){

    echo "------------ Liste des livres ------------".PHP_EOL;
    echo PHP_EOL;
    for($i=0;$i<$taille;$i++){
        $infolivre=cherchelivres($i);
        echo $infolivre[0]." écrit par ".$infolivre[1]." en ".$infolivre[2]. "\n";
    }
    echo PHP_EOL;

}elseif ($choixmenu==2){

    echo "------------ Recherche de livres par auteur ------------".PHP_EOL;

    echo PHP_EOL;
    $valeur=readline("Entrer le nom d'un auteur : ");
    $cas=0;
    for($i=0;$i<$taille;$i++){
        $infolivre=cherchelivres($i);
        if ($infolivre[1]==$valeur){
            echo $infolivre[0]." (".$infolivre[3].") écrit en ".$infolivre[2]."\n";
            $cas++;
        }
    }
    if ($cas<1){
        echo "Aucune livre trouvé pour cet auteur \n";
    }
    echo PHP_EOL;

}elseif ($choixmenu==3){

    echo "------------ Modification de l'année de parution ------------".PHP_EOL;
    echo PHP_EOL;

    $cpt=0;
    $saisie=readline("Saisir un numéro ISBN : ");
    echo PHP_EOL;
    $anneep=readline("Saisir l'année de parution : ");
    echo PHP_EOL;
    $rectification="";
    $stock=0;
    for ($i=0;$i < $taille;$i++){
        $infolivre=cherchelivres($i);
        if ($saisie==$infolivre[4]){
            $stock=$i;
            $rectification="$infolivre[0]:$infolivre[1]:$anneep:$infolivre[3]:$infolivre[4]";
            $cpt++;
        }
    }
    echo PHP_EOL;
    if ($cpt>0){
        $livres[$stock]=$rectification;
        echo "L'année de parution a été modifiée avec succès et afficher la liste des livres mise à jour";
    }else{
        echo "ISBN non trouvé";
    }


    echo PHP_EOL;
    echo PHP_EOL;

}elseif ($choixmenu==4){

    echo "------------ Recherche de livres entre deux années ------------".PHP_EOL;
    echo PHP_EOL;

    $date1=readline("Saisir une Année de début : ");
    echo PHP_EOL;
    $date2=readline("Saisir une Année de fin : ");
    $cas=0;
    for($i=0;$i<$taille;$i++){
        $infolivre=cherchelivres($i);
        if (($infolivre[2]>=$date1) and ($infolivre[2]<=$date2)) {
            echo $infolivre[0]." de ".$infolivre[1]." (Publié en ".$infolivre[2].") \n";
            $cas++;
        }
    }
    if ($cas<1){
        echo "Aucune livre trouvé pour cette intervale de date";
    }

    echo PHP_EOL;
    echo PHP_EOL;

}elseif ($choixmenu==5){

    echo "------------ Recherche de livres par mot clé dans le titre ------------".PHP_EOL;
    echo PHP_EOL;

    $valeur=readline("Entrer votre recherche : ");
    $cas=0;
    for($i=0;$i<$taille;$i++){
        $infolivre=cherchelivres($i);
        $x = strpos($infolivre[0], $valeur);
        if ($x !== false) {
            echo $infolivre[0]." de ".$infolivre[1]." (".$infolivre[2].") \n";
            $cas++;
        }
    }
    if ($cas<1){
        echo "Aucune livre trouvé pour cet recherche";
    }

    echo PHP_EOL;
    echo PHP_EOL;

}elseif ($choixmenu==6){

    echo "------------ Recherche des genres ------------".PHP_EOL;
    echo PHP_EOL;

    $tout_genre="Roman";
    for ($i=0;$i < $taille;$i++){
        $infolivre=cherchelivres($i);
        if ((strpos($tout_genre, $infolivre[3])) == false){
            $tout_genre=$tout_genre."\n".$infolivre[3];
        }
    }

    echo "Les genres dans notre bibliotèque sont : \n".$tout_genre;


    echo PHP_EOL;
    echo PHP_EOL;

}elseif ($choixmenu==7){

    echo "------------ Nombre de livres pour un auteur donné ------------".PHP_EOL;
    echo PHP_EOL;

    $saisie=readline("Entrer un auteur : ");
    $cpt=0;
    for($i=0;$i<$taille;$i++){
        $infolivre=cherchelivres($i);
        if($infolivre[1]==$saisie){
            $cpt++;
        }
    }
    if ($cpt>0){
        echo $saisie." a écrit ".$cpt." livres";
    }else{
        echo "Aucun livre trouvé pour $saisie";
    }
    echo PHP_EOL;
    echo PHP_EOL;

}else{

    echo "\nMerci d'être venue ! bon journée !";
    die();

}
}