<?php 
class Genre
    {
        private Film $Film = [];
        private string $Genre;


        
        public function __construct(Film $Film)
        { //initialisation
            $this->Film[] = $Film;
            $this->Genre = $Genre;
        }
        
        public function afficherFilm() 
        {
            $FilmInfo = "<h1>Film $this</h1>";
            $FilmInfo .= " ";
            foreach ($this->Film as $Film) 
            {
                $FilmInfo .= "$Film";
            }
            $FilmInfo .= " ";
            return $FilmInfo;
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