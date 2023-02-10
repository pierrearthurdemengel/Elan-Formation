<?php

//  PAGE 2 - objet //



$v1 = new voiture('Peugeot', '408', 5);
$v2 = new voiture('Citroën', 'c4', 3);



class voiture {
    private string $marque;
    private string $modele ;
    private int $nbPortes;
    private int $vitesseActuelle = 0;
    private bool $etat = false;

    function __construct($marque, $modele, $nbPortes)
    {
        $this-> marque = $marque;
        $this-> modele = $modele;
        $this -> nbPortes = $nbPortes;
    }
    
    function accelerer($accel) { 
        if ($this -> etat == true)
        {
            $accel = 0;
        }
        else 
        {
            $this->vitesseActuelle = $accel + $this->vitesseActuelle;
        }
        $this->vitesseActuelle = $this->vitesseActuelle + $accel ;
    }
    function demarrer() {
        $this->etat = true;
        echo "la voiture est démarrée";
        if ($etat = true ) {
            echo "la voiture est déjà démarée";
            if ($etat = !true ) {
                {
                    echo "la voiture démarre.";
                }
            }
    }
}

    function stopper() 
    {
        $this->vitesseActuelle = 0 ;
    }
    
    function getMarque() 
    { 
        return $this->marque; 
    }
    
    function setMarque($marque) 
    {
        $this->marque = $marque;
    }

    
    function __toString()
    {
        return $this->marque;
        return $this->modele;
        return $this->nbPortes;
    }

    /**
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @return  self
     */ 
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }
}




// $v1->setMarque('Peugeot');

$v1->accelerer(20);

echo $v1;

// PAGE 1 //

// require 'voiture.php';

$v1 = new voiture("Peugot", 408 , 5);
var_dump($v1->getEtat());
$v2 = new voiture("Citroën", "C4", 3);

