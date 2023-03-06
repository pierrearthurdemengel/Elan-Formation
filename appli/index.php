<!-- Page index -->

<?php
session_start();

ob_start();
// temporisation de sortie 
// img php
if (isset($_FILES['file'])) //fonction isset vérifie si la clé existe
{
    var_dump($_POST);
    var_dump($_FILES);
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $error = $_FILES['file']['error'];
    $error = $_FILES['file']['type'];

    // salon.jpg
    // ['salon', 'jpg']
    $tabExtension = explode('.', $name);
    var_dump($tabExtension);
    $extension = strtolower(end($tabExtension));

    //Tableau des extensions qu'on autorise
    $extensionAutorisees = ['jpg', 'jpeg', 'gif', 'png'];
    $tailleMax = 4000000;

    var_dump(in_array($extension, $extensionAutorisees));
    var_dump($size <= $tailleMax);
    var_dump($error == 0);


    if (in_array($extension, $extensionAutorisees) && $size <= $tailleMax && $error == 0) {

        $uniqueName = uniqid('', true);
        $fileName = $uniqueName . '.' . $extension;

        move_uploaded_file($tmpName, './upload/' . $name);
    } else {
        echo "Mauvaise extension - Format Image ou taille trop importante - max 4000000";
    }

    move_uploaded_file($tmpName, './recap.php' . $name);
}



if (!isset($_SESSION['product'])) {
    $_SESSION['product'] = array();
}
// Afficher les messages de succès ou d'erreur s'ils existent
if (isset($_SESSION['success_message'])) {
    echo "<div class='success-message'>" . $_SESSION['success_message'] . "</div>";
    unset($_SESSION['success_message']);
}

if (isset($_SESSION['error_message'])) {
    echo "<div class='error-message'>" . $_SESSION['error_message'] . "</div>";
    unset($_SESSION['error_message']);
}
function countFruits()
{
    $count = 0;
    if (!empty($_SESSION['product'])) {
        foreach ($_SESSION['product'] as $product) {
            if (isset($product['name'])) {
                $count += $product['qtt'];
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
    <form action="traitement.php?action=add" method="POST" enctype="multipart/form-data">
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
                <textarea id="justification" name="justification" rows="4" cols="100">
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
    <p>Nombre de fruits :
        <?php echo countFruits(); ?>
    </p>
    </br>
    <form action="index.php" method='POST' enctype="multipart/form-data">
        <label for="file"></label>
        <input type='file' name="file">
        <button type="submit">Enregister</button>
    </form>
</body>

</html>