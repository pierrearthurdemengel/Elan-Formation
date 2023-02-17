<?php 
class Acteur extends Personne {
    private $roles = array();

        
        public function __construct(Casting $Casting)
        { //initialisation
            $this->Casting = $Casting;
        }
        
        // GETTERS
        public function getCasting()
        {
            return $this->Casting;
        }
        
        public function __toString()
        {
            return $this->Casting;
        }
}
?>