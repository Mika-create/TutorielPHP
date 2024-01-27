<?php
//Fonctions et lecture de documentation PHP

// $variable = readline();
// var_dump($variable);

//var_dump(123.4, 12, "azeaze");

$mot = readline('Veuillez entrez un mot :');
$reverse = strtolower(strrev($mot));
if (strtolower($mot) === $reverse) {
    echo 'Ce mot est un palyndrome';
} else {
    echo 'Ce mot n\'est pas un palymdrome'; 
}