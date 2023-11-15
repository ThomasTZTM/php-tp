<?php

function cherchelivres($nb_livre){

    global $livres;

    ################# NOM DU LIVRE
    $position_nomlivre = strpos(($livres[$nb_livre]), ":");
    $nomdulivre = substr($livres[$nb_livre], 0, $position_nomlivre);
    echo "\n Nom du livre : $nomdulivre";

################# NOM DE L'AUTEUR
    $nv_nomauteur=substr($livres[$nb_livre],$position_nomlivre+1,(strlen($livres[$nb_livre])-$position_nomlivre));
    $position_nomAuteur = strpos($nv_nomauteur, ":");
    $nomdeAuteur = substr($nv_nomauteur, 0, $position_nomAuteur);
    echo "\n Nom Auteur : $nomdeAuteur";

################# DATE LIVRE
    $nv_date=substr($livres[$nb_livre],$position_nomAuteur+$position_nomlivre+2,(strlen($livres[$nb_livre])-$position_nomAuteur));
    $position_date = strpos($nv_date, ":");
    $date_livre = substr($nv_date, 0, $position_date);
    echo " \n Date : $date_livre";

################# GENRE
    $nv_genre=substr($livres[$nb_livre],$position_nomAuteur+$position_nomlivre+$position_date+3,(strlen($livres[$nb_livre])-$position_date));
    $position_genre = strpos($nv_genre, ":");
    $genre_livre = substr($nv_genre, 0, $position_genre);
    echo " \n Genre : $genre_livre";

################# CODE
    $nv_code=substr($livres[$nb_livre],$position_nomAuteur+$position_nomlivre+$position_date+$position_genre+4,(strlen($livres[$nb_livre])-$position_genre));
    $position_code = strlen($livres[$nb_livre]);
    $code_livre = substr($nv_code, 0, $position_code);
    echo " \n Code : $code_livre";
}


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


echo cherchelivres(1);