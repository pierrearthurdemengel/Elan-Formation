<?php
            // FILM //

class Film
{
        private string $titre;
        private string $date_sortie;
        private string $duree;
        private string $synopsis;
        private string $genre;
        private string $realisateur;
        private $roles = array();
    
        public function __construct($titre, $date_sortie, $duree, $synopsis, $genre, $realisateur)
        { //initialisation
            $this->titre = $titre;
            $this->date_sortie = $date_sortie;
            $this->duree = $duree;
            $this->synopsis = $synopsis;
            $this->genre = $genre;
            $this->realisateur = $realisateur;
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

        // fonctions
        public function ajouterRole($role) 
        {
            array_push($this);
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