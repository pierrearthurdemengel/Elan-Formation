<?php 
class Acteur extends Personne {
    private array $castings;

        public function __construct(Casting $casting)
        { //initialisation
            $this->casting = $casting;
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