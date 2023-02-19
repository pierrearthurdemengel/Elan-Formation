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
        private array $castings = [];
    
        public function __construct(string $titre, DateTime $date_sortie, int $duree, string $synopsis, Genre $genre, Personne $realisateur)
        { //initialisation
            $this->titre = $titre;
            $this->date_sortie = $date_sortie;
            $this->duree = $duree;
            $this->synopsis = $synopsis;
            $this->genre = $genre;
            $this->realisateur = $realisateur;
            $genre->ajouterFilm($this);
            $realisateur->ajouterFilm($this);
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
            array_push($roles, $role);
        }


    public function __toString()
    {
        // return $this->casting.$this->genre.$this->realisateur;
        return "Film : " . $this->titre . " (" . $this->date_sortie->format('Y') . ")";
    }

    public function ajouterFilm($film)
        {
            array_push($films, $film);
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

    public function getActeursByRole($role) {
        $acteurs = [];
        foreach($this->castings as $casting) {
            if($casting->getRole()->getNom() === $role) {
                $acteurs[] = $casting->getActeur();
            }
        }
        return $acteurs;
    }

    public function getCasting() {
        $castings = [];
        foreach($this->castings as $casting) {
            $castings[] = $casting;
        }
        return $castings;
    }
}
?>