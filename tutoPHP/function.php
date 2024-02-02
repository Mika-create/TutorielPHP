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

// $notes = [10, 20, 13];
// $notesReversed = array_reverse($notes);
// print_r($notes);
// print_r($notesReversed);

//Affecte notes2, fonctions immutables
//  $notes = [10, 20, 13];
//  $notes2 = $notes;
//  $notes2[] = 10;
//  var_dump($notes, $notes2);

//Affecte notes1, fonctions mutables
// $notes = [10, 20, 13];
// $notes2 = &$notes;
// $notes2[] = 10;
// var_dump($notes, $notes2);

// while(true) {
//     $mot = readline('Entre votre mot : ');
//     if($mot === ' ') {
//         exit('fin du programme');
//     }
//     $reverse = strtolower(strrev($mot));
//     if (strtolower($mot) === $reverse) {
//         echo 'Ce mot est un palyndrome \n';
//     } else {
//         echo 'Ce mot n\'est pas un palyndrome \n';
//     }
// }

$insultes = ['merde', 'con'];
$asterisque = [];
foreach ($insultes as $insulte) {
    //Trouver la première lettre du mot
    $lettre = substr($insulte, 0, 1);
    //Trouver la taille du mot -1
    //Concaténer la première lettre avec le résultat du str_repeat
    $asterisque[] = $lettre . str_repeat('*', strlen($insulte) - 1);
}
$phrase = readline('Entrez une phrase : ');
$phrase = str_replace($insultes, $asterisque, $phrase);
// foreach($insultes as $insulte) {
//     $replace = str_repeat('*', strlen($insulte));
//     $phrase = str_replace($insulte, $replace, $phrase);
// }
echo $phrase;