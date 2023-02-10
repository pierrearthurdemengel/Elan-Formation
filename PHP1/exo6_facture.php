<?php
//exercice 6

// facture  //

$PrixUnitHT = 9.99;
$Quantite = 5;
$TVA = 0.2;
$TVAFacture = ($PrixUnitHT * $Quantite) * 0.2;
$Facture = $PrixUnitHT * $Quantite + $TVAFacture;
echo "Prix unitaire de l’article: $PrixUnitHT €</br>";
echo "Quantité: $Quantite</br>";
echo "Taux de TVA: $TVA</br>";
echo "Le montant de la facture à régler est de : $Facture €</br>";
