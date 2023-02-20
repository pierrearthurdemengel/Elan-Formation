<?php
    class Chambre 
    {
        private $id_chambre;
        private int $nb_Chambre;
        private float $prixNuit;
        private float $prixSejour;
        private int $nbLits;
        private bool $wifi;

        public function __construct(string $prenom, string $nom, string $sexe , string $dateNaissance)
        { //initialisation
            parent::__construct($nom, $prenom, $sexe, $dateNaissance);
            $this->reservations = [];
        }
    }
?>