<?php 
class Real
    {
        private Film $Film;
    }

    public function __construct(Film $Film)
    { //initialisation
        $this->Film = $Film;
    }

     // GETTERS
    public function getFilm()
            {
                return $this->Film;
            }

    public function __toString()
            {
                return $this->Film;
            }
?>