<?php
            // FILM //

class Film
{
        private string $titre;
        private DateTime $date_sortie;
        private int $duree;
        private string $synopsis;
        private Genre $genre;
        private Realisateur $realisateur;
        private $roles = [];
    
        public function __construct(string $titre, DateTime $date_sortie, int $duree, string $synopsis, Genre $genre, Personne $realisateur)
        { //initialisation
            $this->titre = $titre;
            $this->date_sortie = $date_sortie;
            $this->duree = $duree;
            $this->synopsis = $synopsis;
            $this->genre = $genre;
            $this->realisateur = $realisateur;
            $genre->addFilm($this);
        }

        // GETTERS

    public function getGenre()
    {
        return $this->genre;
    }

    public function getRealisateur()
    {
        return $this->realisateur;
    }
        // fonctions
        public function ajouterRole($role) 
        {
            array_push($this->roles, $role);
        }


    public function __toString()
    {
        // return $this->casting.$this->genre.$this->realisateur;
        return "Film : " . $this->titre . " (" . $this->date_sortie->format('Y') . ")";
    }

    public function addFilm($film)
        {
            array_push($this->films, $film);
        }
    public function afficherFilms() 
    {
        $FilmInfo = "<h1>Film : ". $this->titre."</h1>";
        $FilmInfo .= "<p>Genres : ";
        foreach ($this->genre as $genre) 
        {
            $FilmInfo .= $genre->getNom() . ", ";
        }
        $FilmInfo .= "</p>";
        return $FilmInfo;
    }
}
?>