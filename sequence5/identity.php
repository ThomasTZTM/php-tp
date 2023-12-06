<?php

require 'cours-fonction.php';


$prenom=readline("Entrer votre prénom : ");
$nom=readline("Entrer votre nom : ");
echo creation_identity($prenom, $nom);
