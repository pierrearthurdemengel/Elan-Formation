{# Checkbox #}

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

    $elements =
        [
            "Choix1" => "checked",
            "Choix2" => "checked",
            "Choix3" => "",
        ];

    echo genererCheckbox($elements);
    function genererCheckbox($elements)
    {
        $result = "<form>";

        foreach ($elements as $name => $checked) {
            $result .= "<input type='checkbox' id='$name' name='$name' $checked>
                        <label for='$name'>$name</label>";
        }

        $result .= "</form>";
        return $result;
    }

    ?>


    </div>
</body>

</html>