<?php

function est_pair(int $nbr):bool{
    return $nbr%2 == 0;
}

function creation_identity(string $prenom, string $nom): string{

    # Mettre les sting en minuscule
    $prenom=strtolower($prenom);
    $nom=strtolower($nom);

    # Mettre la premiere lettre des string en majuscule
    $nom[0]=strtoupper($nom[0]);
    $prenom[0]=strtoupper($prenom[0]);

    $identite="Votre identité est $prenom $nom !";
    return $identite;

    # $prenom = ucfirst(strtolower($prenom));
    # $nom = ucfirst(strtolower($nom));
}