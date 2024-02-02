<?php
$prenom = 'Marc' ;
$nom = 'Doe' ;
$note1 = 10 ;
$note2 = 20 ;
$moyenne = ($note1 + $note2) /2 ;

echo 'Bonjour ' . $prenom . ' ' . $nom . ' vous avez eu ' . (($note1 + $note2) /2) . ' de moyenne';
echo "\nBonjour $prenom $nom vous avez eu $moyenne de moyenne\n";

$eleve = [
    'nom' => 'Doe',
    'prenom' => 'Marc',
    'notes' => [10, 20, 15]
];
$eleve['prenom'] = 'Jean';
$eleve['notes'][3] = 16;
echo $eleve['prenom'] . ' ' . $eleve['nom'];
echo $eleve['notes'];
print_r($eleve['notes']);