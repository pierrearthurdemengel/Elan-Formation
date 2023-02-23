<?php

class Hotel
{
    private string $_nom;
    private string $_adresse;
    private string $_ville;
    private string $_codePostal;
    private array $_chambres;
    private array $_reservations;

    public function __construct(string $_nom, string $_adresse, string $_ville, string $_codePostal)
    {
        $this->_nom = $_nom;
        $this->_adresse = $_adresse;
        $this->_ville = $_ville;
        $this->_codePostal = $_codePostal;
        $this->_chambres = [];
        $this->_reservations = [];
    }

    public function ajouterReservation(Reservation $reservation) 
    {
        $this->_reservations[] = $reservation;
    }

    public function getNom(): string
    {
        return $this->_nom;
    }

    public function setNom(string $_nom): void
    {
        $this->_nom = $_nom;
    }

    public function getAdresse(): string
    {
        return $this->_adresse;
    }

    public function setAdresse(string $_adresse): void
    {
        $this->_adresse = $_adresse;
    }

    public function getCodePostal(): string
    {
        return $this->_codePostal;
    }

    public function setCodePostal(string $_codePostal): void
    {
        $this->_codePostal = $_codePostal;
    }

    // Chambres

    public function getChambres(): array
    {
        return $this->_chambres;
    }

    public function setChambres(array $_chambres): void
    {
        $this->_chambres = $_chambres;
    }

    public function ajouterChambre(Chambre $chambre): void
    {
        $this->_chambres[] = $chambre;
    }

    // Reservations

    public function getReservations(): array
    {
        return $this->_reservations;
    }

    public function setReservations(array $_reservations): void
    {
        $this->_reservations = $_reservations;
    }

    public function AfficherDetails(): void
    {
        if (count($this->_reservations) === 0) {
            echo "<h1> Reservations " . $this->_nom . "</h1>";
            echo "Cet hotel n'a aucune reservation pour le moment.";
        } else {
             echo "<h1>Reservation de " . $this->_nom . "</h1>";
            echo "<br>Adresse : " . $this->_adresse . " " . $this->_codePostal . " " . $this->_ville . "<br>" .
                "Nombre de chambres : " . count($this->_chambres) . "<br>" .
                "Nombre de réservations : " . count($this->_reservations) . "<br>" .
                "Nombre de chambres libres : " . (count($this->_chambres) - count($this->_reservations)) . "<br>";
        }
    }


    public function afficherChambresHotel()
    {
        $chambres = " ";
        foreach ($this->getChambres() as $chambre) {
            $chambres .= $chambre . "<br>";
        }
        
        if (empty($this->getChambres())) {
            $chambres = "Pas de chambres dans l'hôtel";
        }
        echo "<h2> Chambres de l'hôtel " . $this->getNom() . "</h2>" . $chambres;
    }

    public function afficherStatutChambres(){
        $result = "<h1> Status des chambre de <b> ". $this->_nom." </b></h1>
                <table>
                 <thead>
                    <tr>
                        <th>Chambre</th>
                        <th>Prix</th>
                        <th>Wifi</th>
                        <th>Statut</th>
                    </tr>
                 </thead><tbody>";
        
        foreach ($this->_chambres as $chambre){
            //declaration variable
            $numero = $chambre->getNumero();
            $prix = $chambre->getPrix();
            $wifi = $chambre->getWifi();
            $etat = $chambre->getStatus();

            //if else de l'état de la chambre
            $etat = ($etat) ? "Reservé" : "Disponible";
            $wifi = ($wifi) ? "oui" : "non";
 
            //Affichage du tableau
            $result.= "
                        <tr>
                            <td> Chambre ". $numero."</td>
                            <td>". $prix."</td>
                            <td>". $wifi."</td>
                            <td>". $etat."</td>
                        </tr>";
        }

        echo $result;
        echo "  </tbody>
             </table>";

    }
    public function afficherReservationsHotel() {
         $result = "<h1>Reservation de". $this ."</h1>
         Nombre de réservations : " .count($this->_reservations) ."<br>";
        $total = 0;
        foreach ($this->_reservations as $reservation) {
           if (count($this->_reservations) == 0)
            {
                echo "Aucune reservation !";
            }
           else  {
            echo $result.= "reservation ".$this->_nom;
            echo "Adresse : ".$this->_adresse. " ".$this->_codePostal. " ".$this->_ville."<br>".
            "Nombre de chambre : ".count ($this->_chambres) ."<br>
            Nombre de réservations : " .count($this->_reservations) ."<br>
            Nombre de chambre libre : ". (count ($this->_chambres)-count($this->_reservations))."<br>";
           }
        }
        return $result;
    }

    public function __toString(): string
    {
        return $this->_nom;
    }
}