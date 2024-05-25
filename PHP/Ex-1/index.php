<?php

// 1°) Ecrire un programme qui demande un nombre à l’utilisateur, puis qui calcule et affiche le carré
// de ce nombre.

// $saisie = readline ("saisir un nombre :");
// $saisie = $saisie * $saisie;
// echo $saisie; 

// 2°) Ecrire un programme qui demande son prénom à l'utilisateur, et qui lui réponde par un
// charmant « Bonjour » suivi du prénom. 

// $prenom = readline("Insérez votre prénom : ");
// echo "Bonjour " . $prenom;

// 3°) Ecrire un programme qui lit le prix HT d’un article, le nombre d’articles et le taux de TVA, et qui
// fournit le prix total TTC correspondant. Faire en sorte que des libellés apparaissent clairement.

$article;
$prixHt = 80;
$nbre = 5;
$tva = $prixHt * 0.20;
$prixTtc = $prixHt + $tva;

echo "Prix unitaire HT : " , $prixHt , " €" , "\n";
echo "Nombre d'articles : " , $nbre , "\n";
echo "TVA : " , $tva . " €" , "\n";
echo "Prix unitaire TTC : " , $prixTtc , " €" , "\n";

