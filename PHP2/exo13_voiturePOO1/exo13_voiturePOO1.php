<!-- {# POO voiture 1 #} -->

<?php

require 'voiture.php';

$v1 = new voiture("Peugot", 408, 5);
$v2 = new voiture("Citroën", "C4", 3);

// echo $v1->getMarque();

$v1->demarrer();
// echo $v1->getEtat();
$v1->accelerer(50);


// $v2->demarrer();
$v2->stopper();
$v2->accelerer(20);
echo $v2->getVitesseActuelle();

echo $v1;
echo $v2;
?>