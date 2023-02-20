<?php
class Hotel
{
    private string $nomHotel;
    private array $chambres;

    public function __construct (string $nomHotel)
    {
        $this-> nomHotel = $nomHotel;
        $this-> chambres = [];
    }

    public function ajouterChambre(Chambre $chambre) 
    {
        $this->chambres[] = $chambre;
    }

    public function afficherChambres() 
    {
        $result = "<h1>Chambre de ". $this->nomHotel."/h1>";
        foreach ($this->chambres as $chambre) {
            $result .= $chambre."<br>";
        }
        return $result;
    }

    public function __toString() {
        return $this->nomHotel;
    }
}
?>