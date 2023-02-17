<?php 
class Acteur extends Personne {
    private array $castings;

        //initialisation
        public function __construct(Casting $casting)
        { 
            $this->castings = array($casting);
        }
        
        // GETTERS
        public function getCastings() 
        {
            return $this->castings;
        }
        
        public function ajouterCasting($casting) 
        {
            array_push($this->castings, $casting);
        }
}
?>