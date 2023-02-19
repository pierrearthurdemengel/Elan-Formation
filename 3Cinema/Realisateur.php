<?php 
class Realisateur extends Personne 
{
    private array $films_realises = [];

    public function __construct(string $nom ,string $prenom ,string $sexe , DateTime $date_naissance)
    { //initialisation
        parent::__construct($nom, $prenom, $sexe, $date_naissance);
    }

     // GETTERS
     public function getFilmographie()
     {
         return $this->films_realises;
     }
     
     public function ajouterFilms(Film $film)
     { 
         $this->films_realises[] = $film;
         $film->setRealisateur($this);
     }
    public function __toString()
            {
                $filmographie = '';
                foreach ($this->getFilmographie() as $film) {
                    $filmographie .= $film . "<br/>";
                }
                return $filmographie;
            }

     //fonction

     public function afficherFilmographie()
     {
         $filmographie = "Filmographie de " . $this->getNomComplet() . " :<br/>";
         foreach ($this->films_realises as $film) {
             $filmographie .= "- " . $film->getTitre() . " (" . $film->getDateSortie()->format('Y') . ")\n";
         }
         return $filmographie;
     }
}
?>