<?php
class Reservation extends Client
{
    private int $id_Reservation;
    private DateTime $dateDebut;
    private DateTime $dateFin;
    private array $reservations;

    public function __construct(string $prenom, string $nom, string $sexe , string $dateNaissance, int $id_Client, int $id_Reservation)
    { //initialisation
        parent::__construct($nom, $prenom, $sexe, $dateNaissance, $id_Client);
        $this->reservations = []; 
        $this->id_Reservation = $id_Reservation;
    }
         // GETTERS
     public function getReservations()
     {
         return $this->reservations;
     }
     
     //fonction
     public function ajouterReservation(string $reservation) 
     {
        $this->reservations[] = $reservation;
    }

     public function afficherReservations() 
     {
         $result = "<h1>Reservations de $this->nom $this->prenom</h1>";
         foreach ($this->reservations as $eservation) {
            $result .= $eservation."<br>";
         }
         return $result;
     }
}
?>