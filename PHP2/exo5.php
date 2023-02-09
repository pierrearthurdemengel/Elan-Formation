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

<body>
    <form action="/ma-page-de-traitement" method="post">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="firstname">Prénom :</label>
            <input type="text" id="fname" name="user_first_name">
        </div>
        <div>
            <label for="ville">Ville :</label>
            <textarea id="ville" name="user_city"></textarea>
        </div>
    </form>
    <br>


    <!-- php -->
    <?php
    $nomsInput = array("Nom", "Prénom", "Ville");
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

    ?>


</body>

</html>