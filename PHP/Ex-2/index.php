<?php


// 1°) Ecrire un algorithme qui demande un nombre à l’utilisateur, et l’informe ensuite si ce
// nombre est positif ou négatif (on laisse de côté le cas où le nombre vaut zéro).

// $saisie = readline("écrit un nombre: ");

// if($saisie > 0) {
//     echo "Tu as écrit un nombre positif !";
// }else( $saisie < 0){
//     echo " tu as écrit un nombre négatif !";
// }

// 2°) Ecrire un algorithme qui demande deux nombres à l’utilisateur et l’informe ensuite si leur
// produit est négatif ou positif (on laisse de côté le cas où le produit est nul). Attention
// toutefois : on ne doit pas calculer le produit des deux nombres.


// $saisie1= readline("Sélctionnez votre 1er nombre : ");
// $saisie2 = readline("Sélctionnez votre 2ème nombre : ");

//     if (($saisie1 < 0 && $saisie2  > 0) || ($saisie1 > 0 && $saisie2  < 0)){
//         echo "Le produit est négatif.";
//     } else {
//         echo "Le produit est positif.";
//     }


// 3°) Ecrire un algorithme qui demande un nombre à l’utilisateur, et l’informe ensuite si ce
// nombre est positif ou négatif (on inclut cette fois le traitement du cas où le nombre vaut
// zéro).


// $saisie = readline("écrit un nombre: ");

// if($saisie > 0) {
//     echo "Tu as écrit un nombre positif !";
// }elseif( $saisie < 0){
//     echo " tu as écrit un nombre négatif !";
// }else{
//     echo "FALTAL ERROR 404 : YOU ARE DEAD";
// }

// 4°) Ecrire un algorithme qui demande deux nombres à l’utilisateur et l’informe ensuite si le
// produit est négatif ou positif (on inclut cette fois le traitement du cas où le produit peut être
// nul). Attention toutefois, on ne doit pas calculer le produit !

// $saisie1 = readline("Sélectionnez votre 1er nombre : ");
// $saisie2 = readline("Sélectionnez votre 2ème nombre : ");

// if ($saisie1 == 0 || $saisie2 == 0) {
//     echo "Le produit est nul.";
// } elseif (($saisie1 < 0 && $saisie2 > 0) || ($saisie1 > 0 && $saisie2 < 0)) {
//     echo "Le produit est négatif.";
// } else {
//     echo "Le produit est positif.";
// }


//     5°) Ecrire un algorithme qui demande l’âge d’un enfant à l’utilisateur. Ensuite, il l’informe de
// sa catégorie :
// • "Poussin" de 6 à 7 ans
// • "Pupille" de 8 à 9 ans
// • "Minime" de 10 à 11 ans
// • "Cadet" après 12 ans

// $saisie = readline("écrit ton age ");

// switch ($saisie) {
//     case ($saisie >= 6 && $saisie <= 7):
//         echo "Poussin";
//     break;
//     case ($saisie >= 8 && $saisie <=9):
//         echo "Pupille";
//         break;
//     case ($saisie >= 10 && $saisie <= 11):
//         echo "Minime";
//     break;
//     case ($saisie >= 12):
//         echo "Cadet";
//         break;
//     default:
//         echo "Pas d'age";
//     break;
//     }

// 6°) Cet algorithme est destiné à prédire l'avenir, et il doit être infaillible !
// Il lira au clavier l’heure et les minutes, et il affichera l’heure qu’il sera une minute plus tard. Par
// exemple, si l'utilisateur tape 21 puis 32, l'algorithme doit répondre :
// "Dans une minute, il sera 21 heures(s) 33".
// NB : on suppose que l'utilisateur entre une heure valide. Pas besoin donc de la vérifier.

$saisie = readline("écrit l'heure: ");

echo "Dans une minute il sera " , $saisie++;
