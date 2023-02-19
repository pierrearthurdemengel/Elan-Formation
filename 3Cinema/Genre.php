<?php 
class Genre
    {
        private string $nom;
        private $films = array();


        
        public function __construct(string $nom)
        { //initialisation
            $this->nom = $nom;
        }
        
        // GETTERS
            
    public function __toString()
            {
                return $this->nom;
            }
    public function getFilms() {
                return $this->films;
            }
}
?>