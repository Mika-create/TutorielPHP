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

$creneaux = [
];

while (true) {
   $debut = (int)readline('Heure d\'ouverture : ');
   $fin = (int)readline('Heure de fermeture : ');
   if ($debut >= $fin) {
       echo 'Le créneaux ne peut pas être enregistré car l\'heure de début ($debut) est supérieur à l\'heure de fin' ;
   } else {
        $creneaux[] = [$debut, $fin];
        $action = readline('Entrer un nouveau créneau (n)');
        if ($action === 'n') {
            break;
        }
   }
} 

// Le magasin est ouvert de 14h à 18h et de 9h 12h

echo 'Le magasin est ouvert de ';
foreach($creneaux as $k => $creneau) {
    if ($k > 0) {
        echo ' et de ';
    }
    echo "{$creneau[0]}h à {$creneau[1]}h";
}

// $heure = (int)readline("A quelle heure voulez vous visiter le magasin?");
// $creneauTrouve = false;

// foreach($creneaux as $creneau) {
//     if ($heure >= $creneau[0] && $heure <= $creneau[1]){
//         $creneauTrouve = true;
//         break;
//     }
// }

// if ($creneauTrouve) {
//     echo 'Le magasin sera ouvert';
// } else {
//     echo 'Désolé, le magasin sera fermé :(';
// }
