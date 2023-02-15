<?php 
class Auteur 
{
    private string $prenom;
    private string $nom;
    private array $livres;
    
    public function __construct(string $nom, string $prenom)
    {
        // initialisation
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
    }

    public function addLivre(Livre $livre)
    {
        $this->livres[] = $livre;
    }

    public function afficherLivre() 
    {
        $livreInfo = "<h1>Livre $this</h1>";
        $livreInfo .= "<ul>";
        foreach ($this->livres as $livres) {
            $livreInfo .= "<li>$livres</li>";
        }
        $livreInfo .= "</ul>";
        return $livreInfo;
    }
    
    public function getNom(): string
    {
        return $this->nom;
    }
    
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    
    public function getLivres()
    {
        return $this->livres;
    }

    public function __toString(): string
    {
        return $this->prenom . ' ' . $this->nom;
    }

}