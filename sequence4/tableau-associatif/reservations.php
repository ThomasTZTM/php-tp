<?php

// Soit le tableau suivant contenant des informations sur des livres
// Chaque livre est représenté par une chaîne de caractères contenant les informations suivantes :
// Titre:Auteur:Année de parution:Genre:ISBN
// Exemple : "Le Petit Prince:Antoine de Saint-Exupéry:1943:Roman:978-2-07-040850-4"
$livres = [
    "978-0-679-60129-2" => "Les Misérables:Victor Hugo:1862:Roman historique",
    "978-0-679-60136-0" => "Notre-Dame de Paris:Victor Hugo:1831:Roman gothique:",
    "978-0-679-60130-8" => "Le Comte de Monte-Cristo:Alexandre Dumas:1844:Roman d'aventure",
    "978-0-679-60137-7" => "Les Trois Mousquetaires:Alexandre Dumas:1844:Roman d'aventure",
    "978-0-679-60131-5" => "Madame Bovary:Gustave Flaubert:1857:Roman réaliste",
    "978-0-679-60138-4" => "L'Education sentimentale:Gustave Flaubert:1869:Roman",
    "978-2-07-040850-4" => "Le Petit Prince:Antoine de Saint-Exupéry:1943:Roman"
];

//list($titre,$auteur,$annee,$genre)=explode($livres,":");

$emprunts = [];

// Rechercher tous les livres dont le titre ou l'auteur contient un mot-clé.
// La recherche retourne un tableau associatif des livres correspondants ( cle : isbn, valeur : titre+auteur).
// Afficher le résultat de la recherche
$table=
$mot_cle=readline("Entrer votre mot-clé : ");
foreach ($livres as $livre){
    list($titre,$auteur,$annee,$genre)=explode($livre,":");
    if (strpos($titre,$mot_cle)!=false){

    }
}


// Gestion des emprunts
// Un adhérent (chaine de caractère) peut emprunter un livre.
// Les emprunts sont stockés dans un tableau associatifs $emprunts (clé : isbn, valeur : nom de l'emprunteur)
// Un livre déjà emprunter ne peut pas être emprunté
// Demander à l'utilisateur de saisir le nom de l'adhérent et l'isbn du livre à emprunter puis créer l'emprunt

//Votre code ICI






