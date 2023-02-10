<!-- champs  de  texte avec  nom,  prénom,  adresse  e-mail, ville, sexe -->

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
    // FORMULAIRES
    $nomsInput = array("Nom", "Prénom", "Ville", "adresse e-mail", "ville", "sexe");
    function afficherInput($nomsInput)
    {
        foreach ($nomsInput as $valeur) {
            echo "<div>
                        <label for= $valeur>$valeur</label><br>
                        <input type='text' id=$valeur name=$valeur>
                </div>";
        }
    };


    afficherInput($nomsInput);

    //  intitulé de formation
    echo "Je souhaite postuler au poste de :<br>";
    $genres = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];

    function afficherRadio($genres)
    {

        foreach ($genres as $genre) {
            echo $genre . "<input type='radio' name='citizenship' /><br />";
        }
    }

    afficherRadio($genres);

    // Submit Bouton

    echo "<br><input type='submit' value='Submit' name='submit'>";





    ?>


</body>

</html>