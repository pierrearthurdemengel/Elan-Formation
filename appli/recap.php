{# Affichera tous les produits en session (et en détail) et présentera le total général de 
tous les produits ajoutés. #}
F?phpsession_start(); 5
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Récapitulatif des produits</title>
</head> 
<body>
    <?php var_dump($_SESSION); ?>
</body> 
</html>
