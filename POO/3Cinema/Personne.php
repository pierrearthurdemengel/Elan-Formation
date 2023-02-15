<?php 
class Personne
    {
        private string $Nom;
        private string $Prenom;
        private Film $Film = [];
    }

    public function __construct(Film $Film)
    { //initialisation
        $this->Film[] = $Film;
    }

    public function afficherFilm() 
    {
        $FilmInfo = "<h1>Film $this</h1>";
        $FilmInfo .= " ";
        foreach ($this->Film as $Film) {
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
                return $this->Film;
            }
?>