{# Traitera la requête provenant de la page index.php (après soumission du 
formulaire), ajoutera le produit avec son nom, son prix, sa quantité et le total calculé 
(prix * quantité) en session. #}
<?php 
    session_start();
    if(isset($_POST['submit'])){

        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION); // filter = protection injection SQL
        $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);

        if($name && $price && $qtt){
            $product = [
                "name" => $name,
                "price" => $price,
                "quantity" => $qtt,
                "total" => $price*$qtt
            ];

            $_SESSION['product'][] = $product;

    }
}
    header("location:index.php"); // header en dernier dans le scipt ou utliser tout de suite après exit() ou die()
    //Impossible de mettre deux headers , le second écraseant le premier
    

?>