<?php
session_start();
if (!isset($_SESSION['product'])) {
    $_SESSION['product'] = array();
}

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajout produit</title>
</head>

<body>
    <h1>Ajouter un produit</h1>
    <form id="form" action="traitement.php" method="post">
        <p>
            <label>
                Nom du produit :
                <input type="text" name="name">
            </label>
        </p>
        <p>
            <label>
                Prix du produit :
                <input type="number" step="any" name="price">
            </label>
        </p>
        <p>
            <label>
                Quantité désirée :
                <input type="number" name="qtt" value="1">
            </label>
        </p>
        <p>
            <label>
                <textarea id="story" name="story" rows="4" cols="100">
                    Expliquez pourquoi vous avez choisit ce fruit
                </textarea>
            </label>
        </p>
        <p>
            <input type="submit" name="submit" value="Ajouter le produit">
        </p>
    </form>
    <button>
        <a href="recap.php">Page Récap</a>
    </button>
    <p>Nombre de fruits : <?php echo countFruits(); ?></p>
</body>

</html>
