<?php
class Reservation
{
    protected DateTime $dateDebut;
    protected DateTime $dateFin;
    private Chambre $chambre;
    private Client $client;
    private Hotel $hotel;

    public function __construct( string $dateDebut, string $dateFin, Chambre $chambre, Client $client)
    { //initialisation
        $this->dateDebut = new DateTime ($dateDebut);
        $this->dateFin = new DateTime ($dateFin);
        $this->chambre = $chambre;
        $this->client = $client;
        $this->hotel = $this->chambre->gethotel();
        $this->client->ajouterReservation($this);
        $this->hotel->ajouterReservation($this);

    }
         // GETTERS

    public function getDateDebut()
     {
         return $this->dateDebut->format('y-m-d');
     }

     
    public function getDateFin()
     {
         return $this->dateFin->format('y-m-d');
        }

    public function getClient()
    {
        return $this->client;
    }

    public function JoursReserves()
    {
        $this->dateDebut->diff($this->dateFin, true);
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