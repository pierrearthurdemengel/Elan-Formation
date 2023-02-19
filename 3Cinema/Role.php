<?php 
class Role
{
        private string $nomRole;
        private array $castings;
        
        public function __construct($nomRole)
        { //initialisation
            $this->nomRole = $nomRole;
            $this->castings = [];
        }
        
        // GETTERS
        public function getNomRole() : string
        {
            return $this->nomRole;
        }

        public function getCastings(): array
        {
            return $this->castings;
        }
        public function getActeurs(): array
        {
            $acteurs = [];
            foreach ($this->castings as $casting) {
                $acteur = $casting->getActeur();
                if (!in_array($acteur, $acteurs, true)) {
                    $acteurs[] = $acteur;
                }
            }
            return $acteurs;
        }

        public function addCasting(Casting $casting): void
        {
            $this->castings[] = $casting;
        }
        
        public function __toString()
        {
            return $this->nomRole;
        }
}
?>
