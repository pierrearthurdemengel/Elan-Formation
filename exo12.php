<?php
//exercice 12


$langue = [
    "abdoul" => "arabe",
    "viktor" => "russe",
    "pierre" => "français",
];

$langue['abdoul'] = 'Salam';
$langue['viktor'] = 'voloy';
$langue['pierre'] = 'salut';

foreach ($langue as $clef => $valeur) {
    echo $valeur . ' ' . $clef . ' <br>';
}


// variante
asort($langue);

foreach ($langue as $clef => $valeur) {
    echo $valeur . ' ' . $clef . ' <br>';;
}
