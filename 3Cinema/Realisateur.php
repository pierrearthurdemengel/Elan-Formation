<?php 
class Realisateur extends Personne 
{
    private array $films;// et pas = [];

    public function __construct(string $prenom, string $nom, string $sexe , string $dateNaissance)
    { //initialisation
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->films = [];      //instancier le tableau dans le construct et pas dans la déclaration des attributs
    }

     // GETTERS
     public function getFilms()
     {
         return $this->films;
     }
     
     public function ajouterFilm(Film $film) {
        $this->films[] = $film;
    }

     //fonction

     public function afficherFilms() {
         $result = "<h1>Films de $this</h1>";
         foreach ($this->films as $film) {
            $result .= $film."<br>";
         }
         return $result;
     }
}
?>