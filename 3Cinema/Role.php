<?php 
class Role
{
        private string $nomRole;
        private array $castings;
        
        public function __construct($nomRole, $castings)
        { //initialisation
            $this->nomRole = $nomRole;
            $this->castings = $castings;
        }
        
        // GETTERS
        public function getNomRole()
        {
            return $this->nomRole;
        }

        public function getCastings()
        {
            return $this->castings;
        }
        
        public function __toString()
        {
            return $this->nomRole;
        }
}

$roles = new Role ("James Bond", $acteur1);
$roles = new Role ("Batman", $acteur6);
?>
