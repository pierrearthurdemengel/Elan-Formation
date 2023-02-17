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
        private $roles = array();
    
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

        // fonctions
        public function ajouterRole($role) 
        {
            array_push($this->role);
        }

    public function getRealisateur()
    {
        return $this->realisateur;
    }

    public function __toString()
    {
        return $this->casting.$this->genre.$this->realisateur;
    }

    public function addFilm($film)
        {
            array_push($this->film);
        }
    public function afficherFilms() 
    {
        $FilmInfo = "<h1>Film : ". $this->titre."</h1>";
        $FilmInfo .= " ";
        foreach ($this->genre as $genre) 
        {
            $FilmInfo .= $genre . " ";
        }
        $FilmInfo .= " ";
        return $FilmInfo;
    }
}

$FilmSkyfall = new Film("Skyfall", "2005-06-15", 140, "Laissé pour mort après une mission en Turquie qui a tourné au désastre, l'agent britannique James Bond, nom de code 007, réapparaît à Londres lorsqu'il apprend par les informations d'un journal télévisé qu'un attentat a été commis contre le M16. Cet événement ébranle considérablement l'autorité de la directrice M.", "Action", "Sam Mendes");
$FilmBatman = new Film("Batman Begins", "2012-09-26", 143, "Comment un homme seul peut-il changer le monde ? Telle est la question qui hante Bruce Wayne depuis cette nuit tragique où ses parents furent abattus sous ses yeux, dans une ruelle de Gotham City. Torturé par un profond sentiment de colère et de culpabilité, le jeune héritier de cette richissime famille fuit Gotham pour un long et discret voyage à travers le monde. Le but de ses pérégrinations : sublimer sa soif de vengeance en trouvant de nouveaux moyens de lutter contre l'injustice.", "Action", "Christopher Nolan");
?>