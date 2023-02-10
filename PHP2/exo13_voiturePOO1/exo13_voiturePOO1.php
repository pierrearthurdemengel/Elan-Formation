
            {# POO voiture 1 #}

<?php 

require 'voiture.php';

$v1 = new voiture("Peugot", 408 , 5);
var_dump($etat);
$v2 = new voiture("Citroën", "C4", 3);
var_dump($etat);
var_dump($vitesseActuelle);

?>