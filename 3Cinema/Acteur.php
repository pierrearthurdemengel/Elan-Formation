<?php 
class Acteur extends Personne {
    private $roles = array();

        public function __construct(Casting $Casting)
        { //initialisation
            $this->Casting = $Casting;
        }
        
        // GETTERS
        public function ajouterRole($role) {
            array_push($this->roles, $role);
        }
    
        public function getRoles() {
            return $this->roles;
        }
}

$Acteur1 = new Acteur("Stephen", "King");
$Acteur2 = new Acteur("Brigitte", "Giraud");
?>