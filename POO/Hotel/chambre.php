<?php
    class Chambre 
    {
        private Hotel $hotel;
        private int $num;
        private float $prix;
        private int $nbLits;
        private bool $hasWifi;
        private array $options;
        private static array $chambres;
        private bool $statut;


        public function __construct(Hotel $hotel, $num, int $nbLits, float $prix, bool $hasWifi = true,)
        {
            $this->hotel = $hotel;
            $this->num = $num;
            $this->prix = $prix;
            $this->nbLits = $nbLits;
            $this->hasWifi = $hasWifi;
            $this->options = $options;
            $this->chambres = $chambres;
            $this->statut = $statut;
        }

        public function getnumChambre()
        {
            return $this->num;
        }

        public function getprixNuit()
        {
            return $this->prix;
        }

        public function getnbLits()
        {
            return $this->nbLits;
        }
        
        public function getwifi()
        {
            return $this->hasWifi;
        }

        
        public function gethotel()
        {
            return $this->hotel;
        }

        public function getOptions()
        {
            return $this->options;
        }

        public function getChambres()
        {
            return $this->chambres;
        }

        
        public function getstatut()
        {
            return $this->statut;
        }

        public function setstatut($statut)
        {
            $this->statut = $statut;
        }


        public function __toString()
        {
        return (string) $this->num;
        }
    }
?>