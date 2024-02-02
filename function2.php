<?php

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

function repondre_oui_non ($phrase) {
    while (true) {
     readline($phrase . " - (o)ui/(n)on");
     if ($response === "o") {
        return true;
     }elseif ($reponse === 'n') {
        return false;
     }
    }
}

$resultat = repondre_oui_non('Voulez vous continuer ?');
$creneau = demander_creneau();
$creneau2 = demander_creneau('Veuillez entrer votre creneau');
//si l'utilisateur tape "o" => true
//si l'utilisateur tape "n" => false
var_dump($resultat);