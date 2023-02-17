<?php 
class Casting
{
        private Film $film;
        private Acteur $acteur;
        private Role $role;
        
        public function __construct($film, Acteur $acteur, Role $role)
        { //initialisation
            $this->film = $film;
            $this->acteur = $acteur;
            $this->role =$role;
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
        
        public function getActeurRole($role) {
            $index = array_search($role, $this->role);
            if ($index === false) {
              return null;
            }
            return $this->acteur[$index];
          }
        
          public function getRoleActeur($acteur) {
            $index = array_search($acteur, $this->acteur);
            if ($index === false) {
              return null;
            }
            return $this->role[$index];
          }

        public function __toString()
        {
            return $this->role.$this->acteur;
        }
}

$casting = new Casting("James Bond", $role, $acteur )
?>