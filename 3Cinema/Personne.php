<?php 
class Personne
    {
        private string $Nom;
        private string $Prenom;
        private string $sexe;
        private $date_naissance;

    public function __construct($nom, $prenom, $sexe, $date_naissance)
    { //initialisation
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->date_naissance = $date_naissance;
    }

     // GETTERS

     public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function getDateNaissance() {
        return $this->date_naissance;
    }
}
?>