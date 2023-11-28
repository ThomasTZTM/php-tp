<?php

$notes = [10, 12.5, 14, 7, 15, 9.5,8];

// -------------------------------------------------------------
// Recherche de la meilleure note
// -------------------------------------------------------------
$meilleureNote = $notes[0];
foreach ($notes as $note) {
    if ($note > $meilleureNote) {
        $meilleureNote = $note;
    }
}
echo "La meilleure note est $meilleureNote";

echo PHP_EOL;

// -------------------------------------------------------------
// Recherche de la meilleure note avec max()
// -------------------------------------------------------------
$meilleureNote = max($notes);
echo "La meilleure note est $meilleureNote";
