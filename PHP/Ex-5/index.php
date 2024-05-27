<?php


// 1°) Écrire un programme qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par
// utilisateurs.

// $tab = [];

// for ($i=0; $i < 9 ; $i++) { 
// $saisie = readline("entrez un nombre: ");
// $tab[] = $saisie;
// }

// foreach ($tab as $key => $value) {
//     echo  $value, "\n";
// }

// 2°) Ecrivez un algorithme permettant à l’utilisateur de saisir un nombre quelconque de valeurs, qui
// devront être stockées dans un tableau. L’utilisateur doit donc commencer par entrer le nombre de
// valeurs qu’il compte saisir. Il effectuera ensuite cette saisie. Enfin, une fois la saisie terminée, le
// programme affichera le nombre de valeurs négatives et le nombre de valeurs positives.

// $tab = [];

// $saisie1 = readline('écrit le nombre de valeur que tu va entrer: ');

// for ($i=0; $i < $saisie1; $i++) { 
//     $saisie2 = readline('ecrit une valeur a ajouter au tableau: ');
//     $tab[] = $saisie2;
// }

// $positives = 0;
// $negatives = 0;

// foreach ($tab as $value) {

//     if ($value < 0){
//         $negatives++;
//     }elseif ($value > 0)
//     $positives++;
// }

// echo "nombre de valeur negative = " , $negatives , "\n";
// echo "nombre de valeur positive = " , $positives , "\n";


// 3°) Ecrivez un algorithme calculant la somme des valeurs d’un tableau (on suppose que le tableau a
// été préalablement saisi).


// $tab = [1, 2, 3, 4, 5];
// $sum = 0;

// for ($i = 0; $i < count($tab); $i++) {
//     $sum += $tab[$i];
// }

// echo "La somme des valeurs du tableau est : " . $sum;

// 4°) Ecrivez un algorithme constituant un tableau, à partir de deux tableaux de même longueur
// préalablement saisis. Le nouveau tableau sera la somme des éléments des deux tableaux de départ.

// $tab1 = [4,8,7,9,1,5,4,6];
// $tab2 = [7,6,5,2,1,3,7,4];
// $tab3 = [];


// for ($i=0; $i < count($tab1); $i++) {
// $resultat = $tab1[$i] + $tab2[$i];
// array_push($tab3, $resultat);

// }

// echo "La somme des valeurs des deux tableaux est : " . implode(", ", $tab3);

// 5°) Ecrivez un algorithme permettant, toujours sur le même principe, à l’utilisateur de saisir un
// nombre déterminé de valeurs. Le programme, une fois la saisie terminée, renvoie la plus grande
// valeur en précisant quelle position elle occupe dans le tableau. On prendra soin d’effectuer la saisie
// dans un premier temps, et la recherche de la plus grande valeur du tableau dans un second temps.

// $tab = [];

// for ($i=0; $i < 5 ; $i++) { 
//     $saisie = readline("entrez un nombre : ");
//     array_push($tab, $saisie);

// };

// $maxValue = $tab[0];
// $position = 0;

// for ($j = 1; $j < count($tab); $j++) { 
//     if ($maxValue < $tab[$j]) { 

//         $maxValue = $tab[$j];
//         $position = $j;
//     }
// }

// echo "La plus grande valeur du tableau est : " . $maxValue . "\n";
// echo "Elle se trouve à la position : " . $position . "\n";

// 6°) Toujours et encore sur le même principe, écrivez un algorithme permettant, à l’utilisateur de saisir
// les notes d'une classe. Le programme, une fois la saisie terminée, renvoie le nombre de ces notes
// supérieures à la moyenne de la classe.


// $tab = [];


// for ($i = 0; $i < 12; $i++) { 
//     $note = readline("Indiquez la note de l'élève " , ($i+1) , " : ");
//     array_push($tab, $note); 
// }

// $sum = array_sum($tab);
// $moyenne = $sum / count($tab);

// echo "La moyenne de la classe est : " , $moyenne . "\n";

// echo "Les notes supérieures à la moyenne sont : ";
// foreach ($tab as $note) {
//     if ($note > $moyenne) {
//         echo $note , " ";
//     }
// }

// 7°) A partir de deux tableaux contenant l’un des prix et l’autre des quantités de produits achetés,
// écrire un programme permettant de calculer le prix total.

// $prix = [5, 50, 23, 11];
// $quantite = [10, 1, 4, 3];  
// $tab3 = [];

// for ($i = 0; $i < count($prix); $i++) {
//     $tab3[] = $prix[$i] * $quantite[$i]; 
// }

// foreach ($tab3 as $value) {
//     $value;
// }

// $total = array_sum($tab3);
// echo "La somme totale est : " . $total;