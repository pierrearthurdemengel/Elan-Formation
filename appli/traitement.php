<!-- Page traitement -->
<?php
session_start();

if(isset($_GET['action'])){
    switch($_GET['action']){
        
        //* ----------AJOUTER UN PRODUIT-----------------------
        case "add":
            if (isset($_POST['submit'])) {
                // Filtrer les inputs du formulaire
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
            }

// récuperer les infos de l'image uploadée
                if(isset($_FILES['file'])){

                    $tmpName = $_FILES['file']['tmp_name'];
                    $nameImg = $_FILES['file']['name'];
                    $size = $_FILES['file']['size'];
                    $error = $_FILES['file']['error'];

// récupérer l'extension du fichier uploadé
                    $tabExtension = explode('.', $nameImg);
                    $extension = strtolower(end($tabExtension));
//Tableau des extensions acceptées
                    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
                }
                break;
                
                //* ----------SUPPRIMER UN PRODUIT---------------------
        case "delete":

                    if (isset($_POST['deleteProduct'])) {
                        $productIndex = $_POST['productIndex'];
                        unset($_SESSION['product']);
                        header('Location: recap.php');
                        exit;
                    }
                break;
                    
                    
                    
                    //* ----------VIDER LE PANIER--------------------------
        case "clear": 
                        //supprimer le tableau de produits en session
                unset($_SESSION["products"]);
                        //redirection
                header("Location: recap.php");
                die();

        //* ----------AUGMENTER QUANTITE PRODUIT----------------
        case "up-qtt":
            if (isset($_POST['updateQuantity'])) {
              $productIndex = $_POST['productIndex'];
              $newQuantity = filter_input(INPUT_POST, "newQuantity", FILTER_VALIDATE_INT);
              if ($newQuantity) {
                $_SESSION['product'][$productIndex]['quantity'] = $newQuantity;
                $_SESSION['success_message'] = "La quantité du produit a été mise à jour avec succès.";
              } else {
                $_SESSION['error_message'] = "Erreur : Veuillez saisir une quantité valide.";
              }
              header('Location: recap.php');
              exit;
            }
          break;
        //* ----------DIMINUER QUANTITE PRODUIT----------------
        case "down-qtt":
        //* ----------DETAIL PRODUIT----------------
        case "detail":
        }
}

    header("location:index.php");


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
?>


