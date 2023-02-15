<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

$Auteur1 = new Auteur("Stephen", "King");
$Auteur2 = new Auteur("Brigitte", "Giraud");

$Livre1 = new Livre("Ca", 1986, 1138, 20, $Auteur1);
$Livre2 = new Livre("Simetierre", 1983, 374, 15, $Auteur1);
$Livre3 = new Livre("Le Fléau", 1983, 823, 14, $Auteur1);
$Livre4 = new Livre("Shining", 1983, 447, 16, $Auteur1);
$Livre5 = new Livre("Vivre vite", 2022, 138, 15.5, $Auteur2);

echo $Auteur1->afficherLivre();
echo $Auteur2->afficherLivre();
?>