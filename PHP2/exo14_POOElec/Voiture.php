<?php

class Voiture
{
    private string $marque;
    private string $modele;

    function __construct($marque, $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
    }


    public function __toString()
    {
        return $this->marque . " " . $this->modele;
        ;
    }

    public function getMarque()
    {
        return $this->marque;
    }
    public function getModele()
    {
        return $this->modele;
    }

}
?>