<?php 
class Acteur extends Personne {
    private array $castings =[];

        //initialisation
        public function __construct(Casting $casting)
        { 
            $this->castings = array($casting);
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