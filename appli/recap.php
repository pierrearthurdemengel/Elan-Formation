<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Récapitulatif des produits</title>
</head>


<body>
    <?php
    // var_dump($_SESSION);
    
    if (!isset($_SESSION['product']) || empty($_SESSION['product'])) {
        echo "<p>Aucun produit en session...</p>";
    } else {
        echo "<table>",
        "<thead>",
        "<tr>",
        "<th>#</th>",
        "<th>Nom</th>",
        "<th>Prix</th>",
        "<th>Quantité</th>",
        "<th>Total</th>",
        "<th>justification</th>",
        "</tr>",
        "</thead>",
        "<tbody>";
    }
    foreach ($_SESSION['product'] as $index => $product) {
        echo "<tr>",
        "<td>" . $index . "</td>",
        "<td>" . $product['name'] . "</td>",
        "<td>" . number_format($product['price'], 2, ",", "&nbsp;") . "&nbsp;€</td>",
        "<td>" . $product['quantity'] . "</td>",
        "<td>" . number_format($product['total'], 2, ",", "&nbsp;") . "&nbsp;€</td>",
        "<td>" . $product['justification'] . "</td>",
        "</tr>";
    }
    echo "<tr>",
    "<td colspan=2>Total général : </td>",
    "</tr>",
    "</tbody>";
    function countFruits() {
        $count = 0;
        if (!empty($_SESSION['product'])) {
            foreach ($_SESSION['product'] as $product) {
                if (isset($product['name'])) {
                    $count += $product['quantity'];
                }
            }
        }
        return $count;
    }
    ?>

    <button>
        <a href="index.php">Retour</a>
    </button>
    <p>Nombre de fruits : <?php echo countFruits(); ?></p>

</body>

</html>