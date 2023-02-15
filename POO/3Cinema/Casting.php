<?php 
class Casting
{
        private Acteur $Acteur;
        private Film $Film;
        private Role $Role;
        
        public function __construct(Film $Film, Acteur $Acteur, Role $Role)
        { //initialisation
            $this->Acteur = $Acteur;
            $this->Film =$Film;
            $this->Role =$Role;
        }
        
        // GETTERS
        public function getFilm()
        {
            return $this->Film;
        }

        public function getActeur()
        {
            return $this->Acteur;
        }

        public function getRole()
        {
            return $this->Role;
        }
        
        public function __toString()
        {
            return $this->Film.$this->Role.$this->Acteur;
        }
}
?>