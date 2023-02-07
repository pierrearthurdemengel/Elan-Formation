<?php
//exercice 13
$notes =
    [
        "Maxime" => [10, 12, 8, 19, 3, 16, 11, 13, 9]
    ];
print_r($notes);

echo "<br>Les notes obtenues par l’élève sont: ";
echo $notes["Maxime"][0] . ' ';
echo $notes["Maxime"][1] . ' ';
echo $notes["Maxime"][2] . ' ';
echo $notes["Maxime"][3] . ' ';
echo $notes["Maxime"][4] . ' ';
echo $notes["Maxime"][5] . ' ';
echo $notes["Maxime"][6] . ' ';
echo $notes["Maxime"][7] . ' ';
echo $notes["Maxime"][8];

print "<br>" . array_sum($notes["Maxime"]) / count($notes["Maxime"]);
