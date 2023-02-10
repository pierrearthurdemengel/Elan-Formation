<?php

class voiture {
    private $marque;
    private $modele ;
    private $nbPortes;
    private $vitesseActuelle = 0;
    private $etat = false;

    public function __construct($marque, $modele, $nbPortes)
    {
        $this-> marque = $marque;
        $this-> modele = $modele;
        $this -> nbPortes = $nbPortes;
    }

    public function accelerer($accel) { 
        if ($this -> etat == true){
            $accel = 0;
        }
        $this->vitesseActuelle = $this->vitesseActuelle + $accel ;
    }
    public function demarrer() {
         $this->etat = true ;
    }
    public function stopper() {
         $this->vitesseActuelle = 0 ;
    }

    public function getMarque() { 
        return $this->marque; 
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function __toString()
    {
        return $this->marque;
        return $this->modele;
        return $this->nbPortes;
    }
}



$v1 = new voiture("Peugeot", "408", 5);
$v2 = new voiture("Citroën", "c4", 3);

// $v1->setMarque("Peugeot");

$v1->accelerer(20);

echo $v1;
echo $vitesseActuelle;

?>