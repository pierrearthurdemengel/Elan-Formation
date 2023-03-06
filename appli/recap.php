<!-- Page recap -->
<?php
session_start();

// Fonction qui compte le nombre de produits
function countFruits()
{
    $count = 0;
    if (!empty($_SESSION['products'])) {
        foreach ($_SESSION['products'] as $product) {
            if (isset($product['name'])) {
                $count += $product['qtt'];
            }
        }
    }
    return $count;
} ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Récapitulatif des produits</title>
    <!-----icone---->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <!-- Script JS pour supprimer tous les produits -->
    <script>
        //JS deleteAllProducts
        // Récupère le bouton de soumission
        const deleteSessionBtn = document.querySelector('button[name="deleteSession"]');

        // Attache un événement de clic au bouton de soumission
        deleteSessionBtn.addEventListener('click', function (event) {
            // Empêche la soumission du formulaire
            event.preventDefault();

            // Supprime la session
            session_unset(); session_destroy();

            // Redirige l'utilisateur vers la page d'accueil ou toute autre page souhaitée
            window.location.href = '/';
        });
    </script>

    <!-- HTML supprimer session -->
    <h1>Tout supprimer</h1>

    <form method="POST">
        <a href='traitement.php?action=deleteSession&id=$index' class='btn btn-outline-danger'> Vider le panier
            </span></a>
    </form>

    <?php

    // Vérifie qu'il y a un produit
    if (!isset($_SESSION['products']) || empty($_SESSION['products'])) {
        echo "<p>Aucun produit en session...</p>";
    } else {
        echo "<table>",
            "<thead>",
            "<tr>",
            "<th>#</th>",
            "<th>Nom</th>",
            "<th>Prix</th>",
            "<th>Qtt</th>",
            "<th>Total</th>",
            "<th>justification</th>",
            "<th>ajouter un produit</th>",
            "<th>supprimer un produit</th>",
            "</tr>",
            "</thead>",
            "<tbody>";
    }
    $totalGeneral = 0;
    foreach ($_SESSION['products'] as $index => $product) {
        $total = $product['qtt'] * $product['price'];
        $totalGeneral += $total;
        echo "<tr>",
            "<td>" . $index . "</td>",
            "<td><a href='traitement.php?action=detail&id=" . $index . "'>" . $product['name'] . "</a></td>",
            "<td>" . number_format($product['price'], 2, ",", "&nbsp;") . "&nbsp;€</td>",
            "<td>",
            "<a href='traitement.php?action=qtt&id=$index' class='btn btn-primary btn-sm'><i class='bi-dash'></i></a>",
            "<span class='p-2'>" . $product["qtt"] . "</span>",
            "<a href='traitement.php?action=up-qtt&id=$index' class='btn btn-primary btn-sm'><i class='bi-plus'></i></a>",
            "</td>",
            "<td>" . number_format($total, 2, ",", "&nbsp;") . "&nbsp;€</td>",
            "<td>" . $product['justification'] . "</td>",
            "<td><a href='traitement.php?action=up-qtt&id=$index' class='btn btn(danger btn-sm'><span class='material-symbols-outlined'>
            add</span></a></td>",
            "<td><a href='traitement.php?action=down-qtt&id=$index' class='btn btn(danger btn-sm'><span class='material-symbols-outlined'>
            remove</span></a></td>",
            "<td><a href='traitement.php?action=delete&id=$index' class='btn btn-danger btn-sm'><span class='material-symbols-outlined'>
            delete</span></a></td>",
            "</tr>";

    }
    echo "<tr>",
        "<td colspan=2>Prix du panier : </td>",
        "<td>" . $totalGeneral . "</td>",
        "</tr>",
        "</tbody>";
    ?>

    <!-- Bouton de navigation -->
    <button>
        <a href="index.php">Retour</a>
    </button>

    <p>Nombre de fruits :
        <?php echo countFruits(); ?>
    </p>
</body>

</html>