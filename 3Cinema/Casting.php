<?php 
class Casting
{
        private Acteur $acteur;
        private Role $role;
        
        public function __construct(Acteur $acteur, Role $role)
        { //initialisation
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
        
        public function __toString()
        {
            return $this->role.$this->acteur;
        }
}
?>