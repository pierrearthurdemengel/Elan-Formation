<?php
            // FILM //
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class Real
{
        private Casting $Casting;
        private Genre $Genre;
        private Real $Realisateur;
    
        public function __construct($Casting, $Genre, $Realisateur)
        { //initialisation
            $this->Casting = $Casting;
            $this->Genre = $Genre;
            $this->Realisateur = $Realisateur;
        }

        // GETTERS
    public function getCasting()
    {
        return $this->Casting;
    }

    public function getGenre()
    {
        return $this->Genre;
    }

    public function getRealisateur()
    {
        return $this->Realisateur;
    }

    public function __toString()
    {
        return $this->Casting.$this->Genre.$this->Realisateur;
    }

}
?>