<!-- Page recap -->

<?php
session_start();


// Function qui supprime toute la session
function deleteAllProducts()
{
    if (isset($_POST['deleteProduct'])) {
        $productIndex = $_POST['productIndex'];
        unset($_SESSION['product'][$productIndex]);
        header('Location: recap.php');
        exit;
}}

// Si le bouton pour tout supprimer est cliqué
if (isset($_POST['deleteAllProducts'])) {
    deleteAllProducts();
}

// Function qui compte le nombre de produit
function countFruits()
{
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Récapitulatif des produits</title>
</head>


<body>
    <!-- HTML supprimer un produit -->
<h1>Supprimer un produit</h1>
    <form method="post">
        <label for="productIndex">Sélectionnez le produit à supprimer :</label>
        <select name="productIndex" id="productIndex">
            <?php foreach ($_SESSION['product'] as $index => $product): ?>
                <option value="<?php echo $index; ?>"><?php echo $product['name']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="deleteProduct">Supprimer</button>
    </form>

    <!-- HTML supprimer session -->
    <h1>Tout supprimer</h1>

<form method="post">
    <button type="submit" name="deleteSession">Supprimer toute la session</button>
</form>

    <?php

    // Vérifie qu'il y a un produit
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
    
            ?>
    
    <!-- Bouton de navigation -->
    <button>
        <a href="index.php">Retour</a>
    </button>
    <p>Nombre de fruits : <?php echo countFruits(); ?></p>
    </body>

     <!-- Bouton tout supprimer
    <form method="post" onsubmit="deleteAllProducts(); return false;">
    <button type="submit">Tout supprimer</button>
    </form>
    </html>  -->