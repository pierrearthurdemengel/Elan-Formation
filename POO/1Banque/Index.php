<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

$titulaire1 = new Titulaire("DEMENGEL", "Pierre-Arthur", "1999-05-02", "Nancy");
// $compte1->depot = 1200;
$compte1 = new Compte("Compte courant", 1200, "€", $titulaire1);
// $compte1->depot(1200);
// echo $compte1 . "<br><br>";

$compte1->retrait(100);

echo $titulaire1;
echo $compte1;
$titulaire1->afficherInfos($compte1);
?>