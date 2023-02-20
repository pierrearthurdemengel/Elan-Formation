<?php

// Index
spl_autoload_register(function ($class_name) 
{
    require_once $class_name . '.php';
});


// POO Hotel

// À partir de ces captures d’écran, réaliser l’application en POO permettant la gestion de réservations
// de chambres par des clients dans différents hôtels :

// Hilton **** Strasbourg

// 10 route de la Gare 67000 STRASBOURG
// Nombre de chambres : 30

// Nombre de chambres réservées : 3
// Nombre de chambres dispo : 27

// Réservations de l'hôtel Hilton **** Strasbourg
// Virgile GIBELLO - Chambre 17 - du 01-01-2021 au 01-01-2021
// Micka MURMANN - Chambre 3 - du 11-03-2021 au 11-03-2021
// Micka MURMANN - Chambre 4 - du 01-04-2021 au 01-04-2021

// Réservations de l'hôtel Regent **** Paris
// Aucune réservation !
// Réservations de Micka MURMANN
// Hotel : Hilton **** Strasbourg / Chambre : 3 (2 lits - 120 € - Wifi : non) du 11-03-2021 au 15-03-2021
// Hotel : Hilton **** Strasbourg / Chambre : 4 (2 lits - 120 € - Wifi : non) du 01-04-2021 au 17-04-2021
// Total : 2400 €

// Statuts des chambres de Hilton **** Strasbourg

// CHAMBRE PRIX WIFI ETAT
// Chambre 1 120€
// Chambre 2 120€
// Chambre 3 120 €

// Chambre 16 300 € S
// Chambre 17 300 € S

// Chambre 18 300 € S\

// Chambre 19 300 € SN

$Hilton = new Hotel ("10 route de la Gare 67000 STRASBOURG", 30, 3);


$virgile = new Client ("GIBELLO","Virgile");
$micka = new Client ("MURMANN", "Micka");

// faire une fonction :
$reservationHilton = new Reservation (Client $client, Chambre $chambre : 
    numéro de chambre(nb de lits, prix total en euro, Wifi vrai ou faux), $dateDebut - $dateFin )

// faire une fonction : 
If pas de réservation, echo "Pas de réservation dans l' $hotel" 


























?>
