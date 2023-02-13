<?php

class Voiture
{
    private string $marque = "Peugeot";
    private string $modele = "408";

    function __construct($marque, $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function __getInfo()
    {
        return $this->marque . " " . $this->modele . " " . this->autonomie;
    }
    public function __toString()
    {
        return __getInfo();
    }

    public function __getMarque()
    {
        return $this->marque;
    }
    public function __getModele()
    {
        return $this->modele;
    }

}



?>