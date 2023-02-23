<?php

// Index
spl_autoload_register(function ($class_name) 
{
    require_once $class_name . '.php';
});

// Création des hôtels
$Hilton = new Hotel ("Hilton", "10 route de la Gare", "67000", "STRASBOURG");
$Regent = new Hotel ("Regent", "14 avenue des Champs Elysées", "75000", "Paris");

foreach(range(1,30)as $num)
{
    if($num <= 15)
    {
        ${"chambreH".$num} = new Chambre($hilton, $num, 2, 120, false);
        ${"chambreR".$num} = new Chambre($regent, $num, 2, 120, false);
    }
    else
    {
        ${"chambreH".$num} = new Chambre($hilton, $num, 1, 300);
        ${"chambreR".$num} = new Chambre($regent, $num, 1, 300);
    }
}

// Création des chambres
$chambre1 = new Chambre(1, 50.0, 2, true, $Regent, true);
$chambre2 = new Chambre(2, 70.0, 3, true, $Regent, true);
$chambre3 = new Chambre(3, 100.0, 4, true, $Regent, true);
$chambre4 = new Chambre(4, 80.0, 2, true, $Hilton, true);
$chambre5 = new Chambre(5, 120.0, 4, true, $Hilton, true);

// Création des clients
$virgile = new Client ("GIBELLO","Virgile");
$micka = new Client ("MURMANN", "Micka");

// Création des réservations
$reservationHilton = new Reservation($Hilton, "2023-02-25", "2023-03-01", $chambre4, $virgile);
$reservationRegent = new Reservation($Regent, "2023-02-26", "2023-03-02", $chambre1, $micka);

// Ajout des réservations aux clients
$virgile->ajouterReservation($reservationHilton);
$micka->ajouterReservation($reservationRegent);

// Affichage des réservations des clients
echo $virgile->afficherReservations();
echo $micka->afficherReservations();

// Fonction pour afficher les chambres d'un hôtel
function afficherChambresHotel(Hotel $hotel)
{
    $chambres = "";
foreach ($hotel->getChambre() as $chambre) {
    $chambres .= $chambre . "<br>";
}
}

   

    if (empty($chambres)) {
        $chambres = "Pas de chambres dans l'hôtel";
    }
    
    
    echo "<h2>Chambres de l'hôtel " . $hotel->getNomHotel() . "</h2>" . $chambres;
    afficherChambresHotel($Regent);
    afficherChambresHotel($Hilton);


























?>
