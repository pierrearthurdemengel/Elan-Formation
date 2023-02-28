<?php

// Index
spl_autoload_register(function ($class_name) 
{
    require_once $class_name . '.php';
});

echo "<h1>POO Hotel</h1><br>
<p>A partir de ces captures d’écran, réaliser l’application en POO permettant la gestion de réservations 
de chambres par des clients dans différents hôtels : </p>";
// Création des hôtels
$hilton = new Hotel ("Hilton", "10 route de la Gare", "67000", "STRASBOURG");
$regent = new Hotel ("Regent", "14 avenue des Champs Elysées", "75000", "Paris");

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
$chambre1 = new Chambre($regent, $num, 2, 50.0,  true);
$chambre2 = new Chambre($regent, $num, 3, 70.0,  true);
$chambre3 = new Chambre($regent, $num, 4, 100.0,  true);
$chambre4 = new Chambre($hilton, $num, 2, 80.0,  true);
$chambre5 = new Chambre($hilton, $num, 4, 120.0,  true);

// Création des clients
$virgile = new Client ("GIBELLO","Virgile");
$micka = new Client ("MURMANN", "Micka");

// Création des réservations
$reservationHilton = new Reservation("2023-02-25", "2023-03-01", $chambre4, $virgile);
$reservationHilton = new Reservation("2023-02-25", "2023-03-01", $chambre5, $virgile);
$reservationRegent = new Reservation("2023-02-26", "2023-03-02", $chambre1, $micka);



// Affichage des réservations des clients
echo $virgile->afficherReservations();
echo $micka->afficherReservations();

$hilton->AfficherDetails();
// $hilton->afficherReservationsHotel();
$regent->afficherReservationsHotel();

// Fonction pour afficher les chambres d'un hôtel

$regent->afficherChambresHotel();
   $hilton-> afficherChambresHotel();
   $hilton->afficherStatutChambres();
   $regent-> afficherStatutChambres();
?>
