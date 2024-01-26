<?php
$note = readline('Entrez votre note :');
if($note >= 10) {
    if($note == 10) {
        echo 'Vous avez juste la moyenne';
    } else {
        echo 'Bravo vous avez la moyenne';
    }
} else {
   echo 'Dommage vous n\'avez pas la moyenne';
}

$action = (int)readline('Entrez votre action: (1: attaquer, 2: défendre, 3: passer mon tour)');
if($action === 1) {
    echo 'J\'attaque !';
} elseif ($action === 2) {
    echo 'Je défends';
} elseif ($action ===3) {
    'Je passe mon tour';
} else {
    echo 'Commande inconnue';
}

// switch ($action) {
//     case 1:
//         echo 'J\'attaque !';
//         break;
//     case 2:
//         echo 'Je défends';
//         break;
//     case 3:  
//         echo 'Je passe mon tour';
//         break;  
//     default:
//         echo 'Commande inconnue';        
// }

$heure = (int)readline('Entrez une heure :');

if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)) {
    echo 'Le magasin sera ouvert';
} else {
     echo 'Le magasin sera fermé';
}

/*
VRAI && VRAI = VRAI
VRAI && FAUX = FAUX
FAUX && FAUX = FAUX

VRAI || VRAI = VRAI
VRAI || FAUX = VRAI
FAUX || FAUX = FAUX
*/
