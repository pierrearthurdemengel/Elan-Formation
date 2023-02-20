<?php
class Reservation extends Cilent
{
    private int $id_reservation;
    private DateTime $dateDebut;
    private DateTime $dateFin;
    private array $reservations;

    public function __construct(string $prenom, string $nom, string $sexe , string $dateNaissance, int $id_reservation)
    { //initialisation
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->reservations = [];
        $this->id_reservation = $id_reservation;
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