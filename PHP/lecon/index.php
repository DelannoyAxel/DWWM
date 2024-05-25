<?php

// $joueur = "Toto";
// $age = 20;
// echo "Nom du joueur :". $joueur . "\n";
// echo "Age du joueur: " .$age . "\n";

// // $age = $age +1;
// $age++;
// echo "Age du joueur: " .$age;


// // string (chaine de caractere)
// $a = "hello world";


// // int (nombre entier)
// $b = 1;

// // float = double (nombre a virgule)
// $c = 3.14;

// // boolean
// $d = true;

// echo $a ."\n";
// echo $b ."\n";
// echo $c ."\n";
// echo $d ."\n";

// echo gettype($a);

// define('MACONST', "hello");
// echo MACONST;

// const PI = 3.14;

// if(true){
//     define('MACONST', "hello");
// }else{
//     define('MACONST', "hello world");
// }

// $saisie = readline ("saisir un nombre :");
// echo $saisie ."\n";
// $saisie = $saisie +5;

// echo $saisie;

// $nbre = 10;

// if($age === 10){
//     echo "Age est égal à 10";
// }else{
//     echo "Age n'est pas égal a 10";
// }

// if($nbre > 50 ){
//     echo "supperieur à 50";
// }elseif($nbre> 20){
//     echo "superieur à 20";
// }elseif($nbre> 5){
//     echo "superieur à 5";
// }else{
//     echo "inferieur à 5"
// }

// // ou

// if($nbre > 50):
//     echo "supperieur à 50";
// elseif($nbre> 20):
//     echo "superieur à 20";
// elseif($nbre> 5):
//     echo "superieur à 5";
// endif;

// ou 

// $prenom = "jean";

// switch($prenom){
//     case "jean":
//         echo "bonjour jean";
//         break;
//     case "paul":
//         echo "bonjoeur paul";
//         break;
//     case "paul":
//         echo "bonjoeur pierre";
//         break;
//     default:
//     echo "pas de nom";
//     break;
// }

// ou

// switch($prenom):
//     case "jean":
//         echo "bonjour jean";
//         break;
//     case "paul":
//         echo "bonjoeur paul";
//         break;
//     case "paul":
//         echo "bonjoeur pierre";
//         break;
//     default:
//     echo "pas de nom";
// endswitch;

// $prenom = "jean";
// echo  match($prenom){
// "jean" => "bonjour jean",
// "paul" => "bonjour paul",
// default => "qui etes vous ?"
// };

// $age = 10;
// $isAllowed;

// if($age > 10){
//     $isAllowed = true;
// }else{
//     $isAllowed = false;
// }

// ou en ternaire

// $isAllowed = $age > 10 ? true : false;

// fuision nul

// $a = null;
// $b = "hello";
// $c;

// if($a){
//     $c =$a;
// }elseif($b){
//     $c = $b;
// }else{
//     $c = "inconnue";
// }

// echo $c;

// // ou

// $c = $a ?? $b ?? "inconnue;"
// echo $c;


$article;
$prixHt = 80;
$nbre = 5;
$tva = $prixHt * 0.20;
$prixTtc = $prixHt + $tva;

echo "Prix unitaire HT : " . $prixHt . " €" . "\n";
echo "Nombre d'articles : " . $nbre . "\n";
echo "TVA : " . $tva . " €" . "\n";
echo "Prix unitaire TTC : " . $prixTtc . " €" . "\n";

