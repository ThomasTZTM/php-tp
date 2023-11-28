<?php

$notes = [];

// -------------------------------------------------------------
// Saisie des notes
// -------------------------------------------------------------
$note = '';
while ($note !== 'q') {
    echo "Entrez une note (ou 'q' pour quitter) : ";
    $note = readline("Saisir un note (q pour arrêter) : ");
    if ($note !== 'q') {
        if ($note >= 0 && $note <= 20) {
            $notes[] = $note; // Ajoute la note au tableau si elle est valide
        } else {
            echo "Note invalide. Veuillez entrer une note entre 0 et 20.\n";
        }
    }
}

// -------------------------------------------------------------
// Affichage du nombre de notes saisies et des notes
// -------------------------------------------------------------
echo "Vous avez saisi " . count($notes) . " notes.";
echo PHP_EOL;
echo "Les notes saisies sont ";
foreach ($notes as $note) {
    echo $note . ' ';
}
echo PHP_EOL;

// -------------------------------------------------------------
// Calcul de la moyenne des notes supérieures ou égales à 10
// -------------------------------------------------------------
$notesSup10 = [];
foreach ($notes as $note) {
    if ($note >= 10) {
        $notesSup10[] = $note;
    }
}
if (count($notesSup10) > 0) {
    $moyenne = round(array_sum($notesSup10) / count($notesSup10),2);
    echo "La moyenne des notes supérieures ou égales à 10 est $moyenne";
} else {
    echo "Il n'y a aucune note supérieure ou égale à 10";
}