<?php
    class Chambre 
    {
        private int $nb_Chambre;
        private float $prixNuit;
        private int $nbLits;
        private bool $wifi;
        private Hotel $hotel;
        

        public function __construct(string $prenom, string $nom, string $sexe , string $dateNaissance)
        { //initialisation
           $this->nom = $nom;
           $this->prenom = $prenom;
           $this->sexe = $sexe;
           $this->dateNaissance = $dateNaissance;// à faire
            $this->reservations = [];
        }
    }
?>