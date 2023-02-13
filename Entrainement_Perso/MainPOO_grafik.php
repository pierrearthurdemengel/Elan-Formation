<!-- Main Page -->

<?php

$date = new MaDate("2014-02-01");
$date = new MaDate();

// MaDate : Classe -> dont on peut définir le fonctionnement 
// $date1 et $date2 : instance / objet 

// Propriétés
$date->days;
$date->months; // attridus et propriétés de l'objet (variables intérieurs objets)
$date->years;

// Méthodes
$date->days();
$date->months(); //fonction qui s'applique sur l'objet
$date->addDays(2);
$date->format('d/m/Y');

// Exercie Personnage

require 'Personnage.php';

spl_autoload_register(function ($class_name) {
        require_once $class_name . '.php'; // Remplace Require 'Personnage' suffit de nommer le fichier objet.php où php serait ici merlin ou harry
});

$merlin = new Personnage();

var_dump($merlin->vie); //function($objet -> atribut)
var_dump($merlin->crier());
$merlin->regenerer();
$merlin->nom = "Merlin";
var_dump($merlin);

$harry = new Personnage();
$harry->nom = "Harry";
var_dump($harry->mort()); //false = vivant et true = mort
var_dump($vie);
var_dump($merlin);
var_dump($harry);

$merlin->attaque($harry);

if ($harry->mort()) {
        echo "Harry est mort :'(";
} else {
        echo "Harry a survecu avec " . $harry->vie;
        ;
}
;

parent::__construct($data); //fonction qui permet de faire "hériter" un objet d'une fonction construct ou string d'un objet parent
?>