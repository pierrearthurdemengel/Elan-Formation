<?php
$var = "elan@elan-formation.fr";
$var2 = "contact@elan";
$var = filter_var($var, FILTER_VALIDATE_EMAIL);
var_dump($var);
// if ($var2 === true) {
//     echo "L'adresse est ok";
// } else {
//     echo "Merci de rentrer un email valide";
// }
?>