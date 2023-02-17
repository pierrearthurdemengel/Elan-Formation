<?php 
class Role
{
        private Casting $Casting;
        
        public function __construct(Film $Film)
        { //initialisation
            $this->Casting = $Casting;
        }
        
        // GETTERS
        public function getFilm()
        {
            return $this->Film;
        }
        
        public function __toString()
        {
            return $this->Film;
        }
        public function getCasting()
        {
            return $this->Casting;
        }
}
?>
