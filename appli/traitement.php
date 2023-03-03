<!-- Page traitement -->
<?php
session_start();

// Fonction pour supprimer tous les produits
function deleteAllProducts() {
  unset($_SESSION['product']);
  $_SESSION['success_message'] = "Tous les produits ont été supprimés avec succès.";
}

if (isset($_POST['submit'])) {

    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION); // filter = protection injection SQL
    $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);
    $justification = filter_input(INPUT_POST, "justification", FILTER_SANITIZE_STRING);

    if ($name && $price && $qtt) {
        $product = [
            "name" => $name,
            "price" => $price,
            "quantity" => $qtt,
            "total" => $price * $qtt,
            "justification" => $justification,
        ];
        $_SESSION['product'][] = $product;
        $_SESSION['success_message'] = "Le produit a été ajouté avec succès.";
    } else {
        $_SESSION['error_message'] = "Erreur : Veuillez vérifier les informations saisies.";
    }

    function countFruits() {
        $count = 0;
        if (isset($_SESSION['product']) && !empty($_SESSION['product'])) {
            foreach ($_SESSION['product'] as $product) {
                if ($product['name'] === 'Fruit') {
                    $count += $product['quantity'];
                }
            }
        }
        return $count;
    }
}

// Vérifie si le bouton de suppression a été cliqué
if (isset($_POST['deleteAll'])) {
    deleteAllProducts();
}
// Function qui supprime un produit
if (isset($_POST['deleteProduct'])) {
    $productIndex = $_POST['productIndex'];
    unset($_SESSION['product']);
    header('Location: recap.php');
    exit;
}
header("location:index.php");
?>
<script>
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

