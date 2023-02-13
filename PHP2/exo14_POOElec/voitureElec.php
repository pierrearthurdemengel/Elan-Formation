<?php
class VoitureElec extends Voiture
{
    private string $marque = "BMW";
    private string $modele = "I3";
    private int $autonomie = 100;

    function __construct($marque, $modele, $autonomie)
    {
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }

    public function __getInfo()
    {
        return $this->marque . " " . $this->modele . " " . this->autonomie;
    }
    public function __toString()
    {
        return getInfo();
    }



}