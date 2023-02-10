
{# convertirMajRouge #}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma page de test</title>
</head>

<body>

    <font color="red">
        <?php
        $texte = "Mon texte en paramètre";


        function convertirMajRouge($texte)
        {
            return strtoupper($texte);
        }



        echo convertirMajRouge($texte);
        ?>
    </font>
</body>

</html>