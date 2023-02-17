<?php 
class Genre
    {
        private array $films;
        private string $genre;


        
        public function __construct(Film $film, string $genre)
        { //initialisation
            $this->films = [$film];
            $this->genre = $genre;
        }
        
        // GETTERS
    public function getFilm()
            {
                return $this->films;
            }
            
            public function __toString()
            {
                return $this->films." appartient au genre ".$this->genre;
            }
}
?>