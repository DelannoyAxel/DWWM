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
//     echo "tu as écrit un nombre nul";
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

$saisie = readline("écrit ton age ");

switch ($saisie) {
    case ($saisie >= 6 && $saisie <= 7):
        echo "Poussin";
    break;
    case ($saisie >= 8 && $saisie <=9):
        echo "Pupille";
        break;
    case ($saisie >= 10 && $saisie <= 11):
        echo "Minime";
    break;
    case ($saisie >= 12):
        echo "Cadet";
        break;
    default:
        echo "Pas d'age";
    break;
    }

//    **
// // Partie 3 Exercice 6
//    **


// $heure = readline('Entrez une heure : ');
// $minute = readline('Entrez une minute : ') + 1;

// // Si les minutes dépassent 59, on ajuste l'heure et les minutes

// if ($minute >= 60) {
//     $heure += 1;
//     $minute -= 60;
// }
// if ($heure >=24 ){
//     $heure-=24 ;
// }

// echo "Dans une minute, il sera $heure heure(s) et $minute minute(s).";

//    **
// // Partie 3 Exercice 7
// //    **


// $heure = readline('Entrez une heure : ');
// $minute = readline('Entrez une minute : ');
// $seconde = readline('Entrez une seconde : ') + 1;
// // Si les secondes dépassent 59, on ajuste les secondes et les minutes
// if ($seconde >= 60) {
//     $minute += 1;
//     $seconde -= 60;
// }

// // Si les minutes dépassent 59, on ajuste l'heure et les minutes

// if ($minute >= 60) {
//     $heure += 1;
//     $minute -= 60;
// }


// if ($heure >=24 ){
//     $heure-=24 ;
// }


// echo "Dans une seconde, il sera $heure heure(s), $minute minute(s) et $seconde seconde(s) .";


//    **
// // Partie 3 Exercice 8
// //    **

//EXERCICE 8
// $nbPhotocopies = readline("Entrez le nombre de photocopies : ");
// $prix;
// switch(true){
//     case ($nbPhotocopies <= 10):
//         $prix = $nbPhotocopies * 0.10;
//         break;
    
//     case ($nbPhotocopies <= 30):
//         $prix = 10 * 0.10 + ($nbPhotocopies - 10) * 0.09 ;
//         break;

//     case ($nbPhotocopies > 30):
//         $prix = 10 * 0.10 + 20 * 0.09 + ($nbPhotocopies - 30) * 0.08;
//         break;

//     default:
//         echo "Valeur incorrecte";
//         break;   
// }
// echo "La facture des photocopies est de $prix €.\n\n";

//    **
// // Partie 3 Exercice 9
// //    **

// $sexe = readline("Indiquez votre sexe : ");
// $age = readline("Indiquez votre age : ");

// if($sexe == "Homme" && $age >= 20){
//     echo "Vous êtes imposable";
// }elseif($sexe == "Femme" && $age >=18 && $age <=35 ){
//     echo "Vous êtes imposable";
// }else{
//     echo "Vous ne payez pas d'impots !";
// }

//    **
// // Partie 3 Exercice 10
// //    **

// $userDay = readline('Veuillez entrer le jour : ');
// $userMonth = readline('Veuillez entrer le mois : ');
// $userYear = readline('Veuillez entrer l\'année : ');

// if ($userYear % 4 === 0 && ($userYear % 400 === 0 || !($userYear % 100 === 0))) {
//     echo "L'année {$userYear} est bissextile"; 
// } else {
//     echo "L'année n'est pas bissextile"; yep
// }