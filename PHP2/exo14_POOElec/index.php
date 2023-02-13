<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "I3", 100);

echo $v1 . "<br>";
echo $ve1 . "<br>";
?>