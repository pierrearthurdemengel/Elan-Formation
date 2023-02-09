<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <form method="post" action="">
        <input type="checkbox" name=Choix[] value="Choix1">
        <label>Choix1</label>
        <input type="checkbox" name=Choix[] value="Choix2">
        <label>Choix2</label>
        <input type="checkbox" name=Choix[] value="Choix3">
        <label>Choix3</label>
    </form>


    <?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['Choix'])) {
            foreach ($_POST['Choix'] as $value) {
                echo $value . " choisie<br/>";
            }
        }
    }
    ?>

    <form>
        <div>
            <?php
            $elements = array("Choix1" => 1, "Choix2", "Choix3");



            function afficherTableHTML($elements)
            {
                echo $elements;
            }
            ;
            echo "<table><tr><th>" . $elements . "</th><th>Coché</th></tr></br>"."<input type='submit' value='Submit' name='submit'>";

            foreach ($elements as $key => $valeur) {
                echo "<tr><td>" . strtoupper($key) . "</td><td>$valeur</td></tr></br>";
            }

            echo "</table>";



            foreach ($elements as $valeur) {
                echo "<input type='checkbox' name='choix[]' id='choix' value=$valeur><label>$valeur</label>";
                if (isset($_POST['submit'])) {
                    if (!empty($_POST['choix'])) {
                        foreach ($_POST['choix'] as $value) {
                            echo $value . " choisie <br/>";
                        }
                    }
                }
            }

            ?>
            <form>
            
        </div </form>
</body>

</html>