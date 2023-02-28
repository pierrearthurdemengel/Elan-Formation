<?php
    class Chambre 
    {
        private Hotel $_hotel;
        private int $_numero;
        private float $_prix;
        private int $_nbLits;
        private bool $_hasWifi;
        private array $_options = [];
        private static array $_chambres = [];
        private bool $_status;
        private array $_reservations;


        public function __construct(Hotel $hotel, int $numero, int $nbLits, float $prix, bool $hasWifi = true)
        {
            $this->_hotel = $hotel;
            $this->_numero = $numero;
            $this->_prix = $prix;
            $this->_nbLits = $nbLits;
            $this->_hasWifi = $hasWifi;
            $hotel->ajouterChambre($this);// cette méthode ajoute les chambres aux hotel
            $this->_reservations = []; //ici on récupére un tableau de reservations
            $this->_status = true;
        }
            // SETTERS ET GETTERS

        public function getnumeroChambre()
        {
            return $this->_numero;
        }
        public function setNumero( int $numero){
            $this -> _numero = $numero;
        }

        public function getprixNuit()
        {
            return $this->_prix;
        }
        public function setPrix( float $prix){
            $this -> _prix = $prix;
        }

        public function getnbLits()
        {
            return $this->_nbLits;
        }
        public function setnbLit( int $_nbLits){
            $this -> _nbLits = $_nbLits;
        }
    
        
        public function getwifi()
        {
            return $this->_hasWifi;
        }
        public function setWifi( int $_hasWifi){
            $this -> _hasWifi = $_hasWifi;
        }

        
        public function gethotel()
        {
            return $this->_hotel;
        }
        public function setHotel(Hotel $hotel)
        {
            return $this->_hotel = $hotel;
    
         }

        public function getOptions()
        {
            return $this->_options;
        }

        public function getChambres()
        {
            return $this->_chambres;
        }

        
        public function getstatus()
        {
            return $this->_status;
        }

        public function setstatus($status)
        {
            $this->_status = $status;
        }

        public function getReservations()
        {
            return $this->_reservations;
        }
    
        public function setReservations($reservations)
        {
            return  $this->_reservations = $reservations;
        }

            //afficher le wifi
    public function afficherWifi(){
    
        if ($this->getWifi() == True)
        {
            return $wifistatus = "Oui";
                        
        }
        else 
        {
        return $wifistatus = "Non";
        } 
    }

        //Ajouter les chambes au réservation
    //Reservation -> array d'objet
    public function addReservation(Reservation $reservation)////
    {
        $this->_reservations[] = $reservation;
    }

        public function __toString()
        {
                return " n°: ". $this->_numero. "/ prix : " .$this->_prix. " euros / Wifi : " .$this->afficherWifi(). " /(nombre de lit :" .$this->_nbLits. ")";

        }
    }
?>