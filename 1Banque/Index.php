<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

$titulaire1 = new Titulaire("DEMENGEL", "Pierre-Arthur", "1999-05-02", "Nancy");
$compte1 = new Compte("Compte courant", 1200, "€", $titulaire1);
$compte2 = new Compte("Livret A", 3000, "€", $titulaire1);

$compte1->retrait(100);
echo $compte1->transfert($compte2, $compte1, 150);
echo $titulaire1->afficherInfos();
echo $titulaire1->afficherComptes();
?>