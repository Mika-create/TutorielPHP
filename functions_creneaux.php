<?php

function demander_creneau ($phrase = 'Veuillez entrer un créneau') {
    echo $phrase . "\n";
    while (true){
        $ouverture = readline('Heure d\'ouverture : ');
        if ($ouverture >= 0 || $ouverture <= 23) {
            break;
        }
    }
    while (true) {
        $fermeture = (int)readline('Heure de fermeture : ');
        if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture){
            break;
        }
    }
    return [$ouverture, $fermeture];
}

// //$resultat = repondre_oui_non('Voulez vous continuer ?');
// $creneau = demander_creneau();
// $creneau2 = demander_creneau('Veuillez entrer votre creneau');
// //si l'utilisateur tape "o" => true
// //si l'utilisateur tape "n" => false
// var_dump($creneau, $creneau2);

function demander_creneaux (string $phrase = "Veuillez entre vos créneaux"): array{
    $creneaux = [];
    $continuer = true;
    while ($continuer){
        $creneau[] = demander_creneau();
        $continuer = repondre_oui_non('Voulez vous continuer ? ');
    }
    return $creneaux;
}