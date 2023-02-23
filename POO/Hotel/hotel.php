<?php
class Hotel
{
    private string $adresse;
    private string $ville;
    private string $CP;
    private string $nomHotel;
    private Reservation $reservation;


    public function __construct ( string $nomHotel, string $adresse, string $ville, string $CP)
    {
        $this-> nomHotel = $nomHotel;
        $this-> reservation = $reservation;

        $this-> adresse = $adresse;
    }

    public function ajouterChambre(Chambre $chambre) 
    {
        $this->reservation[] = $chambre;
    }

    public function afficherreservation() 
    {
        $result = "<h1>Chambre de ". $this->nomHotel."/h1>";
        foreach ($this->reservation as $chambre) {
            $result .= $chambre."<br>";
        }
        return $result;
    }

    public function __toString() 
    {
        return $this->nomHotel;
    }
}
?>