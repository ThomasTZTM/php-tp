<?php

// Définir une fonction qui affiche "Bonjour"
function direBonjour(): void {
    echo "Bonjour ! ";
    echo "Comment ça va ? ";
    echo PHP_EOL;
}
// Appeler la fonction afin de l'exécuter
direBonjour();
direBonjour();
direBonjour();
direBonjour();

echo PHP_EOL;

// Définir une fonction qui affiche "Bonjour" suivi d'un $nom
// La fonction à un paramètre = $nom
function direBonjourNom(string $prenom): void {
    echo "Bonjour ! $prenom ";
    echo PHP_EOL;
}

// Appeler la fonction afin de l'exécuter
$nom="Nicolat";
direBonjourNom($nom);
direBonjourNom("HugoTablo");
$prenom="Franck";
direBonjourNom($prenom); // Meme si le nom est le meme, le $prenom de la fonction ne sera pas remplacer mais prendra la valeur de $prenom(ligne 28)


