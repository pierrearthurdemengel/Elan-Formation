
<?php 
class Realisateur extends Personne 
{

    private $films_realises = array();

    public function __construct(Film $Film)
    { //initialisation
        $this->Film = $Film;
    }

     // GETTERS
    public function getFilm()
            {
                return $this->Film;
            }

    public function __toString()
            {
                return $this->Film;
            }
     //fonction

     public function ajouterFilm($film) {
        array_push($this->films_realises, $film);
    }

    public function getFilmsRealises() {
        return $this->films_realises;
    }
}
?>