
            {# date num to lettres #}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div {
            background-color: darkgray;
        }
    </style>
</head>
<body>


<?php
$jour = date('l');
$mois = date('F');
switch($jour) {
    case 'Monday': $jour = 'Lundi'; break;
    case 'Tuesday': $jour = 'Mardi'; break;
    case 'Wednesday': $jour = 'Mercredi'; break;
    case 'Thursday': $jour = 'Jeudi'; break;
    case 'Friday': $jour = 'Vendredi'; break;
    case 'Saturday': $jour = 'Samedi'; break;
    case 'Sunday': $jour = 'Dimanche'; break;
    default: $jour =''; break;
}




switch($mois) {
    case 'January': $mois = 'Janvier'; break;
    case 'February': $mois = 'Février'; break;
    case 'March': $mois = 'Mars'; break;
    case 'April': $mois = 'Avril'; break;
    case 'May': $mois = 'Mai'; break;
    case 'June': $mois = 'Juin'; break;
    case 'July': $mois = 'Juillet'; break;
    case 'August': $mois = 'Août'; break;
    case 'September': $mois = 'Septembre'; break;
    case 'October': $mois = 'Octobre'; break;
    case 'November': $mois = 'Novembre'; break;
    case 'December': $mois = 'Decembre'; break;
    default: $mois =''; break;
}

$jour_nb = date('d');
$annee = date('Y');
echo 'Nous sommes le '.$jour.'&nbsp;'.$jour_nb.'&nbsp;'.$mois.'&nbsp;'.$annee;
?>

</body>

</html>