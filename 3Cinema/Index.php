<?php
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});


public function afficherFilm() 
{
    $FilmInfo = "<h1>Film $this</h1>";
    $FilmInfo .= " ";
    foreach ($this->Film as $Film) {
        $FilmInfo .= "$Film";
    }
    $FilmInfo .= " ";
    return $FilmInfo;
}
$Acteur1 = new Acteur("Stephen", "King");
$Acteur2 = new Acteur("Brigitte", "Giraud");

$Film1 = new Film("Ca", 1986, 1138, 20, $Acteur1);
$Film2 = new Film("Simetierre", 1983, 374, 15, $Acteur1);
$Film3 = new Film("Le Fléau", 1983, 823, 14, $Acteur1);
$Film4 = new Film("Shining", 1983, 447, 16, $Acteur1);
$Film5 = new Film("Vivre vite", 2022, 138, 15.5, $Acteur2);

echo $Acteur1->afficherFilm();
echo $Acteur2->afficherFilm();
?>
?>