<?php
class Client
{
    private int $id_Client;
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;

    public function __construct(int $id_Client, string $nom, string $prenom, 
    string $dateNaissance)
    {
        // initialisation
        $this->id_Client = $id_Client;
        $this->nom = $nom; 
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    public function getNom(): string
    {
        return $this->nom;
    }
    
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    
    public function getID()
    {
        return $this->id_Client;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function __toString(): string
    {
        return $this->prenom . ' ' . $this->nom."né le ".$this->dateNaissance." dont le numéro client est : ".
        $this->id_Client;
    }

}
?>