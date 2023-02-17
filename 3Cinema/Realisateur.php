<?php 
class Realisateur extends Personne 
{

    protected $realisateur = array();

    public function __construct($nom ,$prenom ,$sexe , $date_naissance)
    { //initialisation
        parent::__construct($nom, $prenom, $sexe, $date_naissance);
    }

     // GETTERS
    public function getRealisateur()
            {
                return $this->Film;
            }

    public function __toString()
            {
                return $this->Film;
            }
     //fonction

     public function ajouterFilm($film) 
     {
        array_push($this->realisateur, $film);
    }

    public function getFilmsRealisateur() 
    {
        return $this->realisateur;
    }
}

$realisateur1 = new Realisateur("Mendes", "Sam", 'M', 1965-08-01);
$realisateur2 = new Realisateur("Nolan", "Christopher ", 'M', 1970-07-30);

?>