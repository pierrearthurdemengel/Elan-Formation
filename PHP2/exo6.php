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
    <label for="genre-select"> </label>
<?php
$elements = array("Choisissez une civilitée", "Monsieur", "Madame", "Mademoiselle");
function alimenterListeDeroulante($elements)
{
    echo '<select name="genre" id="genre-select">';
    foreach ($elements as $valeur) {
        echo "<option value=$valeur>$valeur</option>";
    }
    echo "</select>";
    ;
}
        alimenterListeDeroulante($elements);?>
</body>
</html>