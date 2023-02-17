<?php 
class Genre
    {
        private array $Films;
        private string $Genre;


        
        public function __construct(Film $Film, string $Genre)
        { //initialisation
            $this->Films = [$Film];
            $this->Genre = $Genre;
        }
        
        // GETTERS
    public function getFilm()
            {
                return $this->Film;
            }
            
            public function __toString()
            {
                return $this->Film." appartient au genre ".$Genre;
            }
}
?>