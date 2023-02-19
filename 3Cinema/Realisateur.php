<?php 
class Realisateur extends Personne 
{

    private array $films;

    public function __construct($nom ,$prenom ,$sexe , $date_naissance)
    { //initialisation
        parent::__construct($nom, $prenom, $sexe, $date_naissance);
    }

     // GETTERS
    public function getRealisateur()
            {
                return $this->Films;
            }

    public function __toString()
            {
                return $this->Films;
            }
     //fonction

     public function ajouterFilms($films) 
     {
        array_push($this->realisateur, $films);
    }

    public function getFilmsRealisateur() 
    {
        return $this->realisateur;
    }

    public function getFilmographie() {
        return $this->films_realises;
    }
}


?>