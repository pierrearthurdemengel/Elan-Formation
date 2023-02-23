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

    public function afficherReservations(): void
    {
        if (count($this->_reservations) === 0) {
            echo "<h3>Reservations de " . $this->_nom . "</h3>";
            echo "Cet hotel n'a aucune reservation pour le moment.";
        } else {
            echo "<h3>Reservation de " . $this->_nom . "</h3>";
            echo "Adresse : " . $this->_adresse . " " . $this->_codePostal . " " . $this->_ville . "<br>" .
                "Nombre de chambres : " . count($this->_chambres) . "<br>" .
                "Nombre de réservations : " . count($this->_reservations) . "<br>" .
                "Nombre de chambres libres : " . (count($this->_chambres) - count($this->_reservations)) . "<br>";
        }
    }

    public function __toString(): string
    {
        return $this->_nom;
    }
}