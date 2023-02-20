<?php
class Reservation
{
    private DateTime $dateDebut;
    private DateTime $dateFin;
    private Chambre $chambre;
    private Client $client;

    public function __construct(string $dateDebut, string $dateFin, Chambre $chambre, Client $client)
    { //initialisation
        $this->dateDebut = new DateTime ($dateDebut);
        $this->dateFin = new DateTime ($dateFin);
        $this->chambre = $chambre;
        $this->client = $client;
    }
         // GETTERS

        public function getDateDebut()
     {
         return $this->dateDebut;
     }

     
     public function getDateFin()
     {
         return $this->dateFin;
        }
        public function getClient()
    {
        return $this->client;
    }

        public function getChambre()
    {
        return $this->chambre;
    }

        public function __toString()
    {
        return $this->client. ' - ' . $this->chambre .  ' -  du ' . $this->dateDebut . ' au ' . $this->dateFin.'<br>';
    }
    }
?>