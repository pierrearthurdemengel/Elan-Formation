<?php
class Client
{
    private string $_nom;
    private string $_prenom;
    private array $_reservations;

    public function __construct(string $nom, string $prenom)
    {
        // initialisation
        $this->_nom = $nom; 
        $this->_prenom = $prenom;
        $this->_reservations = [];
    }


    // GETTERS ET SETTERS
    public function getNom(): string
    {
        return $this->_nom;
    }
    public function setNom(string $nom){
        $this->_nom = $nom;
    }
    public function getPrenom(): string
    {
        return $this->_prenom;
    }
    public function setPrenom(string $prenom){
        $this->_prenom = $prenom;
    }
    

    public function ajouterReservation(Reservation $reservation) 
    {
        $this->_reservations[] = $reservation;
    }



    //METHODES
    public function afficherReservations() {
        $result = "<h1>Reservation de $this</h1> Nombre de réservations : " .count($this->_reservations) ."<br>";
        $total = 0;;
        foreach ($this->_reservations as $reservation) {
           if (count($this->_reservations) == 0)
            {
                echo "Ce client n'as pas de reservation";
            }
           else  {
            echo $reservation->getChambre()->getHotel()->getNom(). " - Chambre : ".$reservation->getChambre(). " du ".$reservation->dateDebut." au ".$reservation->dateFin;
           }
        }
        return $result;
    }

    public function ajouterReservations(Reservation $_reservations)
    {
        $this->_reservations[] = $_reservations;
    }

    public function __toString(): string
    {
        return $this->_prenom . ' ' . $this->_nom;
    }
}
?>