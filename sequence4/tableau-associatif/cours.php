<?php
// Déclarer et initialiser un tableau de notes
// Clés = nom étudiant
// Valeur = les notes
$notes = [
    "Dupond" => 12,
    "Joseph" => 4,
    "Benoit" => 20,
    "JEAN" => 4
];

print_r($notes);
echo $notes["Dupond"]." \n\n";

// Ajouter une nouvelle note pour l'étudiant petit

$notes["petit"]=15;
print_r($notes);
echo $notes["petit"]." \n\n";
$notes["petit"]=10;
print_r($notes);

echo "\n##############################\n############# AJOUT ##########\n##############################\n";

foreach ($notes as $a){
    echo $a." ";
}

echo "\n##############################\n####### CHAQUE ETUDIANT ######\n##############################\n";

// Afficher le nom de chaque étudiant avec sa note

foreach ($notes as $nom=>$note){
    $nom=strtolower($nom);
    echo "$nom : $note /";
}


echo "\n##############################\n####### NOM   ETUDIANT ######\n##############################\n";

// Afficher le nom de chaque étudiant

$t=array_keys($notes);
foreach ($t as $tea){
    echo $tea. " ";
}

// Supprimer jean
echo "\n##############################\n####### SUPPRR JEAN ########\n##############################\n";

unset($notes["JEAN"]);
print_r($notes);

// Calculer et afficher la moyenne des notes

echo "\n##############################\n###### UNE MOYENNE 1 #########\n##############################\n";

$no=0;
$nb_notes=0;
foreach ($notes as $a){
    $no+=$a;
    $nb_notes++;
}
$x=$no/$nb_notes;
echo $x;

echo "\n##############################\n###### UNE MOYENNE 2 #########\n##############################\n";

if (!(empty($notes))==false){
    $z=round( ( array_sum($notes) / count($notes) ) );
    echo $z;
}

echo "\n##############################\n###### UNE MOYENNE 3 #########\n##############################\n";

echo array_sum($notes)/count($notes);

echo "\n##############################\n###### LES ETUDIANT A #########\n##############################\n";

$t=array_keys($notes);
sort($t);
print_r($t);



echo "\n##############################\n###### LES ETUDIANT X #########\n##############################\n";

$t=array_keys($notes);
sort($t);
$t=array_reverse($t);
print_r($t);

echo "\n##############################\n###### LES ETUDIANT X #########\n##############################\n";

$t=array_keys($notes);
rsort($t);
print_r($t);

echo "\n##############################\n##### LA MEILLEURE NOTE ######\n##############################\n";
// Rechercher et afficher la meilleure note

$no=0;
foreach ($notes as $a){
    if ($a>$no){
        $no=$a;
        }
}
echo $no;

echo "\n##############################\n##### LA MEILLEURE NOTE ######\n##############################\n";
// Rechercher et afficher la meilleure note

$x=max($notes);
echo $x;

echo "\n##############################\n#### NOTE >= à la moyenne ####\n##############################\n";
// nom étudiant dont les notes son sup a 10

print_r($notes);

echo "\n";

$nom_eleve=[];
foreach ($notes as $nom=>$note){
    if ($note>=10){
        $nom_eleve[]=$nom;
    }
}

if (count($nom_eleve)>1){
    sort($nom_eleve);
    foreach ($nom_eleve as $ne){
        echo "$ne ";
    }
}else{
    echo "Aucun éléve a la moyenne";
}



