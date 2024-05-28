<?php


// 1°) Ecrire une fonction qui permet de calculer le prix TTC en fonction du prix HT, le nombre d’articles
// et le taux de tva.

// function calculTTC($nbArticles, $prix, $TVA){
//     $totalHT = $nbArticles * $prix;
//     $totalTTC = $totalHT + ($totalHT * ($TVA / 100));
//     return "la somme total est de : " . $totalTTC;
// }

// 2°) Écrire une fonction qui calcul le PGCD

// function PGCD($nombre2, $nombre1){

//     while ($nombre2 != 0) {
//         $temp = $nombre2;
//         $nombre2 = $nombre1 % $nombre2;
//         $nombre1 = $temp;
//     }

//     return "Le PGCD de ces deux  nombre est : $nombre1\n";
// }

// 3°) Écrire une fonction qui calcul le PPCM

// function PGCD($nbre, $nbre2) {

//     while ($nbre2 != 0) {
//         $nbre3  = $nbre2 ;
//         $nbre2 = $nbre % $nbre2 ;
//         $nbre = $nbre3 ;
//     }

//     return $nbre;
// }

// function ppcm($nbre, $nbre2) {
//     $pgcd = PGCD($nbre, $nbre2);

//     $ppcm = ($nbre * $nbre2) / $pgcd;

//     return $ppcm;
// }


// 4°) Écrire une fonction qui calcul et affiche la table de multiplication d’un nombre entré par
// l’utilisateur.

// function tableMultiplication($nombre){

//     $tableauResultats = [];

//     for ($i = 0; $i <= 10; $i++) {
//         $resultat = $nombre * $i;
//         $tableauResultats[] = "$nombre x $i = $resultat";
//     } 

//     return $tableauResultats;
// }

// 5°) Écrire une fonction qui calcul la factorielle d’un nombre entré par l’utilisateur et l’affiche

// function Factorielle($saisie){

//     $factorielle = 1;

//     for ($i = 1; $i <= $saisie; $i++) { 
//        $resultat = $factorielle *= $i;
//     }

//     return "La factorielle de $saisie est : $resultat\n";

// }

// 6°) Écrire une fonction qui calcul la somme des valeurs d’un tableau (déjà rempli)

// function arraySum($tab) {
//     $total = 0;

//     foreach ($tab as $value) {
//         $total += $value;
//     }

//     return "La somme des valeurs du tableau est : " . $total;
// }

// 7°) Écrire une fonction qui demande le nombre de ligne et affiche la figure suivante :


// function Figure(){
//     $etoile = "*";
//     $tab = [];

//     for ($i = 1; $i <= 7; $i++) {
//         $ligne = str_repeat($etoile, $i);
//         array_push($tab, $ligne);
//     }

//     for ($i = 6; $i >= 1; $i--) {
//         $ligne = str_repeat($etoile, $i);
//         array_push($tab, $ligne);
//     }

//     foreach ($tab as $ligne) {
//         echo $ligne, "\n";
//     }
// }
