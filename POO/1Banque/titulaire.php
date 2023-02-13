<?php
class titulaire
{
    private string $nom;
    private string $prenom;
    private string $naissance;
    private string $ville;
    private array $wallet;

    public function __construct($nom, $prenom, $naissance, $ville)
    { //initialisation
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->naissance = $naissance;
        $this->ville = $ville;
        $this->wallet = [];
    }

    public function addCompte($compte)
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

    public function __toString()
    {
        return "Compte de monsieur " . $this->nom . " " . $this->prenom . "<br>" .
            "Né le : " . $this->naissance . " à " . $this->ville . "<br>" . $this->wallet;
    }
}



?>