<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport” content=" width=device-width, initial-scale=1.0">
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
            <p>
                <input type="submit" name="submit" value="Ajouter le produit">
            </p> 

        </p>
    </form>
</body>
</html>

{# http://localhost/Pierre-Arthur/Partie-1/appli/index.php #}