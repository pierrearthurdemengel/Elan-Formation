<?php

//  PAGE 2 - objet //

class voiture
{
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesseActuelle;
    private int $accel;
    private bool $etat;

    function __construct($marque, $modele, $nbPortes)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->etat = false;
        $this->vitesseActuelle = 0;


    }

    function accelerer($accel)
    {
        if ($this->etat == true) {
            $this->vitesseActuelle = $accel + $this->vitesseActuelle;
            echo "La " . $this->marque . " " . $this->modele . " accélère de " . $accel . "km/h et la vitesse est maintenant de " . $this->vitesseActuelle . "km/h. <br>";
        } else {
            echo "il faut d'abord alllumer la " . $this->marque . " " . $this->modele . ". <br>";
        }
    }
    function demarrer()
    { {
            if ($this->etat == false) {
                $this->etat = true;
                echo "la " . $this->modele . " démarre.<br>";
            } else {
                echo "la " . $this->marque . " " . $this->modele . " est déjà démarrée.<br>";
            }
        }

    }

    function stopper()
    {
        if ($this->vitesseActuelle > 0) {
            $this->vitesseActuelle = 0;
            echo "La " . $this->marque . " " . $this->modele . " est stoppée. <br>";
        } else {
            echo "La " . $this->marque . " " . $this->modele . " est déjà stoppée. <br>";
        }
    }

    function getMarque()
    {
        return $this->marque;
    }

    function getModele()
    {
        return $this->modele;
    }
    function getEtat()
    {
        return $this->etat;
    }
    function getVitesseActuelle()
    {
        return "La vitesse du véhicule " . $this->marque . " " . $this->modele . " est de " . $this->vitesseActuelle . " km/h. ";
    }



    function setMarque($marque)
    {
        $this->marque = $marque;
    }

    function setModele($modele)
    {
        $this->modele = $modele;
    }



    // Attention return = sortie de fonction -> pas possible de
    public function __toString()
    {
        return "Nom et modèle du véhicule : " . $this->marque . $this->modele . "<br>" .
            "Nombre de portes : " . $this->nbPortes . "<br>" .
            "Le véhicule " . $this->marque . " est " . $this->etat . ".<br>" .
            "Sa vitesse actuelle est de " . $this->vitesseActuelle . " km/h";
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
;