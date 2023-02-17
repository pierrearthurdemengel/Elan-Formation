<?php 
class Genre
    {
        private array $films;
        private string $genre;
        private string 


        
        public function __construct(string $genre)
        { //initialisation
            $this->films = [];
            $this->genre = $genre;
        }
        
        // GETTERS
    public function getFilm() : array
            {
                return $this->films;
            }
            
    public function __toString()
            {
                return $this->genre;
            }
    public function addFilm(Film $film) 
    {
        $this->films[] = $film;
    }
}
?>