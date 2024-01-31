<?php
//Fonctions et lecture de documentation PHP

// $variable = readline();
// var_dump($variable);

//var_dump(123.4, 12, "azeaze");

// $mot = readline('Veuillez entrez un mot :');
// $reverse = strtolower(strrev($mot));
// if (strtolower($mot) === $reverse) {
//     echo 'Ce mot est un palyndrome';
// } else {
//     echo 'Ce mot n\'est pas un palymdrome'; 
// }

// $notes = [10, 20, 13];
// $sum = array_sum($notes);
// $count = count($notes);
// echo "Vous avez " . round($sum / $count) . " de moyenne";

// $notes = [10, 20, 13];
// $notes[] = 16;
// print_r($notes);

$notes = [10, 20, 13];
$notesReversed = array_reverse($notes);
print_r($notes);
print_r($notesReversed);