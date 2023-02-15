<?php 
class Acteur
{
        private Casting $Casting;

        
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