<?php
//$chiffre = null;

// while ($chiffre !== 10) {
//     $chiffre = (int)readline('Entrez une heure : ');
// }

// echo 'Bravo vous avez gagné !';
$eleves = [
    'cm2' => ['Jean', 'Marc', 'Jane', 'Marion'],
    'cm1' => ['Emilie', 'Marcelin',]
];

// for ($i = 0; $i < 10; $i ++) {
//     echo '- ' . $notes[$i] . "\n";
// }

foreach ($eleves as $classe => $listEleves) {
    echo "La classe $classe: \n";
    foreach ($listEleves as $eleve) {
        echo "- $eleve\n";
    }
    echo "\n";
}