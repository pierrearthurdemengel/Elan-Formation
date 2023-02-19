<?php 
class Casting
{
        private Film $film;
        private Acteur $acteur;
        private Role $role;
        
        public function __construct(Film $film, Acteur $acteur, Role $role)
        { //initialisation
            $this->film = $film;
            $this->acteur = $acteur;
            $this->role = $role;
        }
        
        // GETTERS

        public function getActeur()
        {
            return $this->acteur;
        }

        public function getRole()
        {
            return $this->role;
        }
        
        public function getFilm()
        {
            return $this->film;
        }
        
        public function getActeurRole($role)
        {
            return [$this->acteur, $this->role];
        }
    
        public function getRoleActeur($acteur)
        {
            return [$this->role, $this->acteur];
        }

        public function __toString()
        {
          return $this->role . " joué par " . $this->acteur . " dans " . $this->film;
        }
}?>