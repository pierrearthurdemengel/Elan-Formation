<?php
//exercice 10
$MontantAPayer = 152;
$MontantVerse = 200;
$ResteAPayer = $MontantVerse - $MontantAPayer; // 48
$Billet10 = 10;
$Billet5 = 5;
$Piece2 = 2;
$Piece1 = 1;

//1.
$partieEntiere = (int)($ResteAPayer / $Billet10);
echo "Rendre $partieEntiere billets de 10$. <br>";
$ResteAPayer = $ResteAPayer % $Billet10;

$partieEntiere = (int)($ResteAPayer / $Billet5);
echo "Rendre $partieEntiere billets de 5$. <br>";
$ResteAPayer = $ResteAPayer % $Billet5;

$partieEntiere = (int)($ResteAPayer / $Piece2);
echo "Rendre $partieEntiere pièces de 2$. <br>";
$ResteAPayer = $ResteAPayer % $Piece2;

$partieEntiere = (int)($ResteAPayer / $Piece1);
echo "Rendre $partieEntiere pièces de 1$. <br>";
$ResteAPayer = $ResteAPayer % $Piece1;
