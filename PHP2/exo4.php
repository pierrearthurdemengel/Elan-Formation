<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <!-- code tableau html -->

    <table>

        <tr>
            <th>PAYS</th>
            <th>Capitale</th>
        </tr>

        <tr>
            <td>ALEMAGNE</td>
            <td>Berlin</td>
        </tr>

        <tr>
            <td>FRANCE</td>
            <td>Paris</td>
        </tr>

        <tr>
            <td>ITALIE</td>
            <td>Rome</td>
        </tr>

        <tr>
            <td>USA</td>
            <td>Washington</td>
        </tr>

        <tr>
            <td>ESPAGNE</td>
            <td>Madrid</td>
        </tr>

    </table>

    <?php

    $link = '<a href="https://fr.wikipedia.org/wiki/" target="_blank">Lien</a>';
    $capitales = array(
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome",
        "Espagne" => "Madrid"
    );

    function afficherTableHTML($capitales)
    {
        echo $capitales;
    };
    echo "<table>" . "<tr><th>PAYS</th><th>Capitale</th><th>Lien wiki</th>
    </tr></br>";
    ksort($capitales);
    foreach ($capitales as $key => $valeur) {
        // 
        // 
        //strtoupper($chaineDeCaracteres);
        // 
        //     
        // 
        // 
        // 

        // echo  $valeur . ' ' . $key . ' <br>';
        echo "<tr><td>" . strtoupper($key) . "</td>"
            . "<td>" . $valeur . "</td>" .
            " <td>" . $link . "</td></tr></br>";
    }
    echo "</table>";





    ?>

</body>

</html>