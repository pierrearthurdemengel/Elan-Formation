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


<!-- exemple html -->

<!-- <label for="genre-select">Choose a gender:</label>

<select name="genre" id="genre-select">
    <option value="">--Please choose a genre--</option>
    <option value="Monsieur">Monsieur</option>
    <option value="Madame">Madame</option>
    <option value="Mademoiselle">Mademoiselle</option>

</select>
 -->

<!-- php -->
<?php
$elements = array("Choisissez une civilitée", "Monsieur", "Madame", "Mademoiselle");
function alimenterListeDeroulante($elements)
{
    foreach ($elements as $valeur) {
        echo "<select name=$valeur id=$valeur>
        <option value=$valeur>$valeur</option>
        <option value=$valeur>$valeur</option>
        <option value=$valeur>$valeur</option>
        <option value=$valeur>$valeur</option>
    
    </select>";
    }
};


alimenterListeDeroulante($elements);

?>


</body>

</html>