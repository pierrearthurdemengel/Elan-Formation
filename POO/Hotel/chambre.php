<?php
    class Chambre 
    {
        private int $nb_Chambre;
        private float $prixNuit;
        private int $nbLits;
        private bool $wifi;
        private Hotel $hotel;


        public function __construct(int $nb_Chambre, float $prixNuit, int $nbLits, bool $wifi, Hotel $hotel)
        {
            $this->nb_Chambre = $nb_Chambre;
            $this->prixNuit = $prixNuit;
            $this->nbLits = $nbLits;
            $this->wifi = $wifi;
            $this->hotel = $hotel;
        }

        public function calculerPrx(int $nbNuits): float
        {
            return $this->prixNuit * $nbNuits;
        }





        public function __toString()
        {
        return (string) $this->nb_Chambre;
        }
    }
?>