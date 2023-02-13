<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

$titulaire1 = new titulaire("DEMENGEL", "Pierre-Arthur", "27-05-1999", "Nancy");
// $compte1->depot = 1200;
$compte1 = new compte("Compte courant", 1200, "€", $titulaire1);
// $compte1->depot(1200);
// echo $compte1 . "<br><br>";

$compte1->retrait(100);
echo $titulaire1;

?>