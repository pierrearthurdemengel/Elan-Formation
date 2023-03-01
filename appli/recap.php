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
    <?php var_dump($_SESSION); 
    
    if(!isset($_SESSION['product']) || empty($_SESSION['product']))
    {
        echo "<p>Aucun produit en session...</p>";
    }
    else {
        echo "<table>",
                "<thead>",
                  "<tr>",
                    "<th>#</th>",
                    "<th>Nom</th>",
                    "<th>Prix</th>",
                    "<th>Quantité</th>",
                    "<th>Total</th>",
                  "</tr>",
                "</thead>",
                "<tbody>";
              
                $totalGeneral = 0;
                foreach ($_SESSION['product'] as $index => $product)
                {
                        echo "<tr>",
                            "<td>". $index. "</td>",
                            "<td>". $product['name']. "</td>",
                            "<td>". number_format($product['price'], 2, ",", "&nbsp;")."&nbsp;€</td>",
                            "<td>". $product['qtt']. "</td>",
                            "<td>". number_format($product['total'], 2, ",", "&nbsp;")."&nbsp;€</td>",
                         "</tr>";
                        $totalGeneral+= $product['total'];
                }
                echo "<tr>",
                        "<td colspan=2>Total général : </td>",
                        "<td><trong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;€</trong></td>",
                        "</tr>",
                        "</tbody>";

                /* number_format(
variable à modifier, 
nombre de décimales souhaité, 
caractère séparateur décimal,
caractère séparateur de milliers5
);
*/
    }
    ?>
</body> 
</html>
