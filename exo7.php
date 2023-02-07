<?php
//exercice 7

$age = 10;
if ($age = 7 xor $age = 6) {
    $resultat = "Poussin";
    echo "La personne qui a $age ans est dans la catégorie $resultat<br>";
} elseif ($age = 9 xor $age = 8) {
    $resultat = "Pupille";
    echo "La personne qui a $age ans est dans la catégorie $resultat<br>";
} elseif ($age >= 11 xor $age = 10) {
    $resultat = "Minime";
    echo "La personne qui a $age ans est dans la catégorie $resultat<br>";
} elseif ($age >= 12) {
    $resultat = "Cadet";
    echo "La personne qui a $age ans est dans la catégorie $resultat<br>";
}
