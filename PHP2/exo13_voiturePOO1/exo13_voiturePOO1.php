
            {# POO voiture 1 #}

<?php 

require 'voiture.php';

$v1 = new voiture($marque, $modele, $nbPortes);
var_dump($etat);
$v2 = new voiture($marque, $modele, $nbPortes);
var_dump($etat);

?>