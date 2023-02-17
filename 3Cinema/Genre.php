<?php 
class Genre
    {
        private string $genre;


        
        public function __construct(string $genre)
        { //initialisation
            $this->genre = $genre;
        }
        
        // GETTERS
            
    public function __toString()
            {
                return $this->genre;
            }
        }
?>