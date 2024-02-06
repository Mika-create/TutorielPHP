<?php

//declare(strict_types=1); //évites les conversions implicites

//Création d'une fonction

// $nom = "Doe";

// function bonjour ($prenom = null) {
//     global $nom;
//     if ($prenom === null) {
//         return "Bonjour\n";
//     }
//     return 'Bonjour ' . $prenom . " " . $nom . "\n";
// }

// echo bonjour('Jean');

 function repondre_oui_non (?string $phrase = null): bool {
     while (true) {
     $reponse = readline($phrase . " - (o)ui/(n)on : ");
      if ($reponse === "o") {
         return true;
      }elseif ($reponse === 'n') {
         return false;
     }
     }
 }

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

function demander_creneaux (string $phrase = "Veuillez entre vos creéneaux"): array{
    $creneaux = [];
    $continuer = true;
    while ($continuer){
        $creneau[] = demander_creneau();
        $continuer = repondre_oui_non('Voulez vous continuer ? ');
    }
    return $creneaux;
}


