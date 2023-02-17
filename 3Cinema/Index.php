<?php
spl_autoload_register(function ($class_name) 
{
    require_once $class_name . '.php';
});

echo $Acteur1->afficherFilm();
echo $Acteur2->afficherFilm();
?>
