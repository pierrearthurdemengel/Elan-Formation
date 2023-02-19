<?php 
class Acteur extends Personne {
    private array $castings =[];

        //initialisation
        public function __construct(string $nom ,string $prenom ,string $sexe , DateTime $date_naissance)
        { //initialisation
            parent::__construct($nom, $prenom, $sexe, $date_naissance);
        }
        
        // GETTERS
        public function getCastings() : array
        {
            return $this->castings;
        }
        
        public function ajouterCasting(Casting $casting) 
        {
            $this->castings[] = $casting;
        }
        public function getFilmographie() {
            $films = [];
            foreach($this->castings as $casting) {
                $films[] = $casting->getFilm();
            }
            return $films;
        }
}
?>