<?php 
class Personne
{
        private string $prenom;
        private string $nom;
        private string $sexe;
        private DateTime $dateNaissance;

    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance)
    { //initialisation
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;    //ne pas oublier new DateTime
        $this->dateNaissance = new DateTime($dateNaissance);
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
        return $this->dateNaissance;
    }
    public function __toString() {
        return $this->nom . ' ' . $this->prenom;//."né le ".$this->date_naissance;
    }
}


// $acteur1 = new Acteur("Craig", "Daniel", "M", 1968-03-02);
// $acteur2 = new Acteur("Johansson", "Scarlett", "F", 1984-11-22);
// $acteur3 = new Acteur("Depp", "Johnny", "M", 1963-06-09);
// $acteur4 = new Acteur("Streep", "Meryl", "F", 1949-06-22);
// $acteur5 = new Acteur("Denzel", "Washington", "M", 1954-12-28);
// $acteur6 = new Acteur("Bale", "Christian", "M", 1974-01-30);

// $realisateur1 = new Realisateur("Mendes", "Sam", 'M', 1965-08-01);
// $realisateur2 = new Realisateur("Nolan", "Christopher ", 'M', 1970-07-30);
// $realisateur3 = new Realisateur("Bigelow", "Kathryn", "F", 1951-11-27);
// $realisateur4 = new Realisateur("Tarantino", "Quentin", "M", 1963-03-27);
// $realisateur5 = new Realisateur("Spielberg", "Steven", "M", 1946-12-18);
// $realisateur6 = new Realisateur("Coppola", "Francis Ford", "M", 1939-04-07);
?>
