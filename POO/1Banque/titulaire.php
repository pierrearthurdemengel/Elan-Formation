<?php
class Titulaire
{
    private string $nom;
    private string $prenom;
    private DateTime $naissance;
    private string $ville;
    private array $wallet;

    public function __construct(string $nom, string $prenom, string $naissance, string $ville)
    { //initialisation
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->naissance = new DateTime($naissance);
        $this->ville = $ville;
        $this->wallet = [];
    }

    public function addCompte(Compte $Compte)
    {
        $this->wallet[] = $Compte;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getNaissance()
    {
        return $this->naissance;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function getWallet()
    {
        return $this->wallet;
    }

    public function afficherComptes() 
    {
        $comptesInfo = "<h1>Comptes de $this</h1>";
        foreach ($this->wallet as $compte) {
            $comptesInfo .= $compte . "<br>";
        }
        return $comptesInfo;
    }
    
    public function afficherInfos()
    {
        $naissanceString = $this->naissance->format('d/m/Y');
        return "$this - Né le ".$naissanceString." à ". $this->ville."<br>";
    }

    public function __toString()
    {
        return $this->prenom." ".$this->nom;
    }
}
?>