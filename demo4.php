<?php
//$chiffre = null;

// while ($chiffre !== 10) {
//     $chiffre = (int)readline('Entrez une heure : ');
// }

// echo 'Bravo vous avez gagné !';
// $eleves = [
//     'cm2' => ['Jean', 'Marc', 'Jane', 'Marion'],
//     'cm1' => ['Emilie', 'Marcelin',]
// ];

// // for ($i = 0; $i < 10; $i ++) {
// //     echo '- ' . $notes[$i] . "\n";
// // }

// foreach ($eleves as $classe => $listEleves) {
//     echo "La classe $classe: \n";
//     foreach ($listEleves as $eleve) {
//         echo "- $eleve\n";
//     }
//     echo "\n";
// }

/* 
Demande à l'utilisateur de rentrer une note ou de taper "fin"
chaque note est sauvegardée dans un tableau $notes (pensez $notes[])
à la fin on affiche le tableau de note sous forme de liste
*/

// $notes = [];
// $action = null;
// //TANT QUE l'utilisateur ne tape pas "fin"
// while($action !== 'fin') {
//      $action = readline('Entrez une nouvelle note (ou \'fin\' pour terminer la saisie) :');
//      // On ajoute la note tapée au tableau notes
//      if ($action !== 'fin') {
//         $notes[] = (int)$action;
//      }
// }
// // POUR chaque note DANS notes
// foreach ($notes as $note) {
//     // ON AFFICHE "- note"
//     echo "- $note\n";
// }

/*
On veut demander à l'utilisateur de rentrer les horaires d'ouverture d'un magasin
On demande à l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert
*/

//On demande à l'utlisateur de rentrer un créneau
   // On demande l'heure de début
   // On demande l'heure de fin
   // On vérifie que l'heure de début < l'heure de fin
   // On demande si on veut rajouter un nouveau créneau (o/n)
//On demande à l'utilisateur de rentrer une heure
//On affiche l'état d'ouverture du magasin
