<!-- Page recap -->
<?php
session_start();

// Fonction qui compte le nombre de produits
function countProducts()
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
    <!-- Script JS pour supprimer tous les produits -->
    <script>
        //JS deleteAllProducts
        // Récupère le bouton de soumission
        const deleteSessionBtn = document.querySelector('button[name="deleteSession"]');

        // Attache un événement de clic au bouton de soumission
        deleteSessionBtn.addEventListener('click', function(event) {
            // Empêche la soumission du formulaire
            event.preventDefault();

            // Supprime la session
            sessionStorage.clear();

            // Redirige l'utilisateur vers la page d'accueil ou toute autre page souhaitée
            window.location.href = '/';
        });
    </script>

    <!-- HTML supprimer un produit -->
    <h1>Supprimer un produit</h1>
    <form method="POST">
        <label for="productIndex">Sélectionnez le produit à supprimer :</label>
        <select name="productIndex" id="productIndex">
            <?php foreach ($_SESSION['product'] as $index => $product) : ?>
                <option value="<?php echo $index; ?>"><?php echo $product['name']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="deleteProduct">Supprimer</button>
    </form>

    <!-- HTML supprimer session -->
    <h1>Tout supprimer</h1>

    <form method="POST">
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
        "<td><a href='traitement.php?action=detail&id=$index'>". $product['name'] . "</a></td>",
        "<td>" . number_format($product['price'], 2, ",", "&nbsp;") . "&nbsp;€</td>",
        "<td>",
            "<a href='traitement.php?action=down-qtt&id=$index' class='btn btn-primary btn-sm'><i class='bi-dash'></i></a>",
            "<span class='p-2'>".$product["qtt"]."</span>",
            "<a href='traitement.php?action=up-qtt&id=$index' class='btn btn-primary btn-sm'><i class='bi-plus'></i></a>",
        "</td>",
        "<td>" . number_format($total, 2, ",", "&nbsp;") . "&nbsp;€</td>",
        "<td><a href='traitement.php?action=delete&id=$index' class='btn btn-danger btn-sm'><i class='bi-trash'></i></a></td>",
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
    <form method="POST" onsubmit="deleteAllProducts(); return false;">
    <button type="submit">Tout supprimer</button>
    </form>
    </html>  -->