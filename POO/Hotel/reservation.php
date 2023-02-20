<?php
class Reservation
{
    private DateTime $dateDebut;
    private DateTime $dateFin;
    private array $reservations;
    private Chambre $chambre;
    private Client $client;

    public function __construct(string $dateDebut, string $dateFin, array $reservations)
    { //initialisation
 // à faire
        $this->reservations = $reservations; 
    }
         // GETTERS
     public function getReservations()
     {
         return $this->reservations;
     }

          public function getDateDebut()
     {
         return $this->dateDebut;
     }

     public function getDateFin()
     {
         return $this->dateFin;
     }
     //fonction
     public function ajouterReservation(string $reservation) 
     {
        $this->reservations = $reservation;
    }

     public function afficherReservations() 
     {
         $result = "<h1>Reservations ". $this->reservations."</h1>";
         foreach ($this->reservations as $reservation) {
            $result .= $reservation."<br>";
         }
         return $result;
     }
}
?>