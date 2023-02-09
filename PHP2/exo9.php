<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    </style>
</head>
<body>


<?php
$genres = ["Masculin","Féminin","Neutre"];

function afficherRadio($genres) {
    
    foreach($genres as $genre ) {
        echo $genre. "<input type='radio' name='citizenship' /><br />";
    }
        
}

afficherRadio($genres)

?>
</body>
</html>