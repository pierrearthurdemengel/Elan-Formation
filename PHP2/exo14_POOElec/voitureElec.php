<?php
class VoitureElec extends Voiture
{
    private string $marque;
    private string $modele;
    private int $autonomie;

    function __construct($marque, $modele, $autonomie)
    {
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }


    public function __toString()
    {
        return parent::__toString() . $this->autonomie;
    }
}