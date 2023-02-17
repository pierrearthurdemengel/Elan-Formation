<?php
spl_autoload_register(function ($class_name) 
{
    require_once $class_name . '.php';
});


public function afficherFilm() 
{
    $FilmInfo = "<h1>Film". $this."</h1>";
    $FilmInfo .= " ";
    foreach ($this->Film as $Film) {
        $FilmInfo .= "$Film";
    }
    $FilmInfo .= " ";
    return $FilmInfo;
};



echo $Acteur1->afficherFilm();
echo $Acteur2->afficherFilm();
?>
