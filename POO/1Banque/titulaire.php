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

    public function addCompte(Compte $compte)
    {
        $this->wallet[] = $compte;
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
        $result = "<h1>Comptes de $this</h1>";
        foreach($this->wallet as $compte) 
        {
            $result .= $compte;
        }
        return $result;
    }
    
    public function afficherInfos()
    {
        $naissanceString = $this->naissance->format('d/m/Y');
        return "Né le ".$naissanceString." à ". $this->ville."<br>".
        "Compte ". $this->wallet;
    }

    public function __toString()
    {
        return $this->afficherComptes() . "<br>";
    }
}
?>