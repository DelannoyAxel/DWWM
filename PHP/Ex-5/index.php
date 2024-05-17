<?php


// 1°) Écrire un programme qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par
// utilisateurs.

// $tab =[];

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

$tab = [];

$saisie1 = readline('écrit le nombre de valeur que tu va entrer: ');

for ($i=0; $i < $saisie1; $i++) { 
    $saisie2 = readline('ecrit une valeur a ajouter au tableau: ');
    $tab[] = $saisie2;
}

$positives = 0;
$negatives = 0;

foreach ($tab as $value) {

    if ($value < 0){
        $negatives++;
    }elseif ($value > 0)
    $positives++;
}

echo "nombre de valeur negative = " , $negatives , "\n";
echo "nombre de valeur positive = " , $positives , "\n";




