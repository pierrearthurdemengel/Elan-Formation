<?php 
class Acteur extends Personne {
    private array $castings =[];

        //initialisation                                                        //String et pas DateTime
        public function __construct(string $nom ,string $prenom ,string $sexe , string $date_naissance)
        { //initialisation
            parent::__construct($prenom, $nom, $sexe, $date_naissance);
        }
        
        // GETTERS
        public function getCastings()
        {
            return $this->castings;
        }
        
        public function ajouterCasting(Casting $casting) 
        {
            $this->castings[] = $casting;
        }

        public function afficherFilmographie() {
            $result = "<h1>Filmographie de $this</h1>";
            foreach ($this->castings  as $casting) {
                $result .= $casting->getFilm()." (". $casting->getRole().")<br>";
            }
            return $result;
        }
        // public function getFilmographie() {
        //     $films = [];
        //     foreach($this->castings as $casting) {
        //         $films[] = $casting->getFilm();
        //     }
        //     return $films;
        // }
}
?>