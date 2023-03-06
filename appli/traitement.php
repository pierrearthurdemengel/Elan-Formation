<!-- Page traitement -->

<!-- fichier.php?argument1=XXX&argument2=YYY&argument3=ZZZ -->
<?php
session_start();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {

        //* ----------AJOUTER UN PRODUIT-----------------------
        // ajouter un produit (traitement.php?action=ajouterProduit)
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
                        "qtt" => $qtt,
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
            if (isset($_FILES['file'])) {

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
        // supprimer un produit :  traitement.php?action=supprimerProduit&id=XXX
        case "delete":
            //vérifier si le paramètre "id" est défini dans l'URL et vérifier si le produit existe en session
            if (isset($_GET["id"]) && isset($_SESSION["products"][$_GET["id"]])) {
                $deletProd = $_SESSION["products"][$_GET["id"]];
                //supprimer le produit de la session
                unset($_SESSION["products"][$_GET["id"]]);
                //redirection
                header("Location: recap.php");
                die();
            } else
                $_SESSION["message"] = "Action impossible !";
            break;



        //* ----------VIDER LE PANIER--------------------------
        // vider le panier (traitement.php?action=viderPanier)
        case "clear":
            //supprimer le tableau de produits en session
            unset($_SESSION["products"]);
            //redirection
            header("Location: recap.php");
            die();

        //* ----------AUGMENTER QUANTITE PRODUIT----------------
        // augmenter la quantité : traitement.php?action=augmenterQtt&id=XXX
        case "up-qtt":
            if (isset($_POST['updateQuantity'])) {
                $productIndex = $_POST['productIndex'];
                $newQuantity = filter_input(INPUT_POST, "newQuantity", FILTER_VALIDATE_INT);
                if ($newQuantity) {
                    $_SESSION['products'][$productIndex]['qtt'] = $newQuantity;
                    $_SESSION['success_message'] = "La quantité du produit a été mise à jour avec succès.";
                } else {
                    $_SESSION['error_message'] = "Erreur : Veuillez saisir une quantité valide.";
                }
                header('Location: recap.php');
                exit;
            }
            break;
        //* ----------DIMINUER QUANTITE PRODUIT----------------
        // baisser la quantité :  traitement.php?action=baisserQtt&id=XXX
        case "down-qtt":
        //* ----------DETAIL PRODUIT----------------
        case "detail":
    }
}

header("location:index.php");


function countFruits()
{
    $count = 0;
    if (isset($_SESSION['products']) && !empty($_SESSION['products'])) {
        foreach ($_SESSION['products'] as $product) {
            if ($product['name'] === 'Fruit') {
                $count += $product['qtt'];
            }
        }
    }
    return $count;
}
?>


<!-- 

session -- une session est une période délimitée pendant laquelle un appareil informatique est en communication et réalise des opérations au service d'un client - un usager, un logiciel ou un autre appareil.
superglobale -- variables array internes au PHP accessibles n’importe où dans le script qui s'inscrivent TOUJOURS en majuscule
cookie -- Un cookie, c'est un petit fichier que l'on enregistre sur l'ordinateur du visiteur. Ce fichier contient du texte et permet de « retenir » des informations sur le visiteur.
requete http -- protocole qui contrôle la façon dont le client formule ses demandes et la façon dont le serveur y répond
faille xss -- Cross-Site Scripting est une faille qui permet d'injecter du code HTML et/ou Javascript dans des variables ou bases de données mal protégées

-->