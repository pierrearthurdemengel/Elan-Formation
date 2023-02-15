<?php 
class Livre 
{
    private string $titre;
    private int $nbPages;
    private int $anneeParu;
    private float $prix;
    private Auteur $auteur;
    
    public function __construct(string $titre, int $anneeParu, int $nbPages,  float $prix, Auteur $auteur)
{       //initialisation
    $this->titre = $titre;
    $this->nbPages = $nbPages;
    $this->anneeParu = $anneeParu;
    $this->prix = $prix;
    $this->auteur = $auteur;
    $this->auteur->addLivre($this);
}

public function getTitre()
{
    return $this->titre;
}

public function getNbPages()
{
    return $this->nbPages;
}

public function getAnneeParu()
{
    return $this->anneeParu;
}

public function getPrix()
{
    return $this->prix;
}

public function getAuteur()
{
    return $this->auteur;
}

 public function __toString()
{
    return $this-> titre." ". 
    $this->nbPages." ". 
    $this->anneeParu." ". 
    $this->prix. " ".
    $this->auteur."<br>";
}
}
?>