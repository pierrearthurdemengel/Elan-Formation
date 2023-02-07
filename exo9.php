<?php
//exercice 9
$age = 12;
$sexe = 'F';
echo "Age : $age <br>
Sexe : $sexe<br>";

if ($sexe == "F") {
    switch (true) {
        case $age >= 18 && $age <= 35:
            echo "La personne est imposable.
        <br>";
            break;
        default:
            echo "La personne n'est pas imposable.
        <br>";
    }
} else {
    switch (true) {
        case $age >= 20:
            echo "La personne est imposable.
        <br>";
            break;
        default:
            echo "La personne n'est pas imposable.
        <br>";
    }
}
