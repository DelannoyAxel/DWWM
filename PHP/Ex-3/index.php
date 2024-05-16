<?php


// // BOUCLE WHILE / TANT

// $i = 5;
// while ($i < 9){
//     echo $i++;
// }


// 1°) Ecrire un algorithme qui demande à l’utilisateur un nombre compris entre 1 et 3 jusqu’à
// ce que la réponse convienne

// $saisie = readline('écrit un nombre entre 1 et 3: ');
// while($saisie < 1 || $saisie >3){
//     echo "Vous n'avez pas mis un nombre entre 1 et 3.\n";
//     $saisie = readline ("veuillez ressayer: ");
// };


// 2°) Ecrire un algorithme qui demande un nombre compris entre 10 et 20, jusqu’à ce que la
// réponse convienne. En cas de réponse supérieure à 20, on fera apparaître un message :
// « Plus petit ! », et inversement, « Plus grand ! » si le nombre est inférieur à 10.

// $saisie = readline("veuillez entrer un nombre entre 10 et 20: ");

// while($saisie < 10 || $saisie > 20){
//     if ($saisie < 10) {
//     echo "plus grand ! \n";
//     $saisie = readline("Try again: ");  
// }elseif($saisie > 20) {
//     echo "plus petit ! \n";
//     $saisie = readline("Try again: ");
// }};

// 3°) Ecrire un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix
// nombres suivants. Par exemple, si l'utilisateur entre le nombre 17, le programme affichera
// les nombres de 18 à 27.

// $saisie = readline("veuillez entrer un nombre: ");
// $nbre = $saisie + 1;
  
// while ($nbre <= $saisie + 10) {
//     echo "$nbre\n";
//         $nbre++;
// }

// 4°) Vous devez écrire un programme qui calcul le PGCD de 2 nombres.
// PGCD = Plus Grand Diviseur Commun, s’écrit PGCD (a ; b)
// Vous devez demander à l’utilisateur deux nombres

// $saisie1 = readline("Veuillez entrer un premier nombre : ");
// $saisie2 = readline("Veuillez entrer un deuxième nombre : ");

// if ($saisie2 > $saisie1) {
//     $temp = $saisie1;
//     $saisie1 = $saisie2;
//     $saisie2 = $temp;
// }

// while ($saisie2 != 0) {
//     $temp = $saisie2;
//     $saisie2 = $saisie1 % $saisie2;
//     $saisie1 = $temp;
// }

// echo "Le PGCD des deux nombres est : $saisie1\n";

// 5°) Vous devez écrire un programme qui demande à l’utilisateur le PPCM de 2 nombres
// PPCM : Le Plus Petit Multiple Commun, s’écrit PPCM(a,b)


// $nbre = readline("Choissiez un 1er nombre : ");
// $nbre2 = readline("Choissiez un 2ème nombre : ");


// function gcd($nbre, $nbre2 ) {

//     while ($nbre2 != 0) {
//         $nbre3  = $nbre2 ;
//         $nbre2 = $nbre % $nbre2 ;
//         $nbre = $nbre3 ;
//     }

//     return $nbre;
// }

// function ppcm($nbre, $nbre2) {
//     $pgcd = gcd($nbre, $nbre2);
    
//     $ppcm = ($nbre * $nbre2) / $pgcd;
    
//     return $ppcm;
// }

// echo ppcm($nbre, $nbre2);