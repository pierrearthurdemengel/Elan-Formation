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

                <!-- Se fait tout seul grâce à xdebug-var-dump -->
<?php
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
var_dump($tableauValeurs);
        foreach($tableauValeurs as $tableauValeur)
{
    echo var_dump($tableauValeur)."<br>";
}
?>;

</body>
</html>