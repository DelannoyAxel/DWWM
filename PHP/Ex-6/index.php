<?php


// 1°) Soit le tableau associatif suivant : $chomage = array(‘Autriche' =>4.9, 'Allemagne' =>9.3 ,
// 'Danemark' =>4.8 , ' Espagne' =>9.4 , 'France' =>9.7); 
// 1. A l'aide de la boucle foreach afficher tous les pays et le taux de chômage correspondant


// $chomage = array ("Autriche" =>4.9, 
//                 "Allemagne" =>9.3 ,
//                 "Danemark" =>4.8 , 
//                 "Espagne" =>9.4 , 
//                 "France" =>9.7
// );

// echo "J'affiche tout les pays et le taux de chomage correspondant: " , "\n";

// foreach ($chomage as $key => $value) {
//    echo $key , "  ", $value , " , ";
// }

// 2. A l'aide d'une boucle, écrire les instructions en PHP permettant de parcourir le tableau et
// d’afficher le nom des pays européens ayant moins de 5 % de chômage.

// $chomage = array ("Autriche" =>4.9, 
//                 "Allemagne" =>9.3 ,
//                 "Danemark" =>4.8 , 
//                 "Espagne" =>9.4 , 
//                 "France" =>9.7
// );


// $tauxChomage = 100 * 0.05;

// foreach ($chomage as $key => $value) {
//     if($value < $tauxChomage){
//         echo $key , "  ", $value , " , ";
//     }
// }

// 3. Afficher le nom du pays ayant le taux de chômage le plus faible

// $chomage = array ("Autriche" =>4.9, 
//                 "Allemagne" =>9.3 ,
//                 "Danemark" =>4.8 , 
//                 "Espagne" =>9.4 , 
//                 "France" =>9.7
// );



// $tauxChomageMin = min($chomage);
// $paysResultat = array_search($tauxChomageMin, $chomage);
// echo "le pays avec le taux de chomage le plus faible est : " , $paysResultat , "avec un taux de : " , $tauxChomageMin;

// 2°) Compléter le tableau suivant avec quelques noms et quelques notes : $tabNotes = array
// (['boucher'] =>16, ['bourdette'] =>13 .........à compléter
// 1. A l'aide d'une boucle afficher le nom de chaque élève et la note correspondante


// $tabNotes = array ("boucher" => 16,
//                    "chasseur" => 13,
//                    "paysan" => 3,
//                    "boulanger" => 8,
//                    "pecheur" => 18
// );

// foreach ($tabNotes as $key => $value) {
//     echo $key, " ", $value, "\n";
// };

// 2. Afficher la moyenne des notes

// $tabNotes = array ("boucher" => 16,
//                    "chasseur" => 13,
//                    "paysan" => 3,
//                    "boulanger" => 8,
//                    "pecheur" => 18
// );


// foreach ($tabNotes as $key => $value) {
//     echo $key, " ", $value, "\n";
// };

// $sum = array_sum($tabNotes);
// $moyenne = $sum/count($tabNotes);

// echo "la moyenne des notes est : ", " " , $moyenne;


// 3°) $tabNotes = array(['prenot'] => array (2,10,14), ['perthuis'] => array (10,18,12) …à compléter avec
// des élèves et des notes de votre choix
// 1. Afficher le nom et les notes de chaque élève

// $tabNotes = array('chasseur' => array (2,10,14),
//                   'boucher' => array (10,18,12),
//                   'paysan' => array (5,15,11),
//                   'boulanger' => array (19,18,2),
//                   'pecheur' => array (4,18,1)
// );

// foreach ($tabNotes as $nom => $notes) {
//     echo $nom , "\n";
//     foreach ($notes as $key => $value) {
//         echo $value, " \n";
//     }
// };

// 2. Afficher le nom et la moyenne de chaque élève

// $tabNotes = array('chasseur' => array (2,10,14),
//                   'boucher' => array (10,18,12),
//                   'paysan' => array (5,15,11),
//                   'boulanger' => array (19,18,2),
//                   'pecheur' => array (4,18,1)
// ); 


// foreach ($tabNotes as $nom => $notes) {
//         $sum = array_sum($notes);
//         $moyenne = $sum/count($notes);

//         echo " la moyenne des notes de " , $nom , " " , "est de " , $moyenne, "\n";

// };

// 3. Afficher les notes et la moyenne d'un élève dont le nom sera saisi au clavier (attention vous
// devez vérifier que cet élève est bien présent dans le tableau)

// $tabNotes = array(
//     'chasseur' => array(2, 10, 14),
//     'boucher' => array(10, 18, 12),
//     'paysan' => array(5, 15, 11),
//     'boulanger' => array(19, 18, 2),
//     'pecheur' => array(4, 18, 1)
// );

// $saisie = readline("Écrit le nom de l'élève : ");

// if (isset($tabNotes[$saisie])) {
//     $notes = $tabNotes[$saisie];
//     $sum = array_sum($notes);
//     $moyenne = $sum / count($notes);

//     echo "La moyenne des notes de $saisie est de $moyenne\n";
//     echo "Les notes : ";
//     foreach ($notes as $value) {
//         echo $value . " ";
//     }
//     echo "\n";
// } else {
//     echo "Élève non trouvé.\n";
//

// 4. Faire un menu pour afficher les questions 1,2,3



// $saisie = readline("Quel exercise souhaitez vous afficher ? Les exercises disponibles sont : 1 - 2 - 3 : ");


// Exercices 8
// 1°) Soit un tableau T à deux dimensions (12, 8) préalablement rempli de valeurs numériques.
// Écrire un algorithme qui recherche la plus grande valeur au sein de ce tableau

// $T = [
//     [3, 1, 4, 1, 5, 9, 2, 6],
//     [5, 3, 5, 8, 9, 7, 9, 3],
//     [2, 3, 8, 4, 6, 2, 6, 4],
//     [3, 3, 8, 3, 2, 7, 9, 5],
//     [1, 0, 2, 5, 3, 5, 8, 9],
//     [7, 9, 3, 2, 300, 8, 4, 6],
//     [2, 7, 1, 0, 2, 8, 4, 1],
//     [4, 2, 9, 1, 6, 5, 3, 5],
//     [8, 9, 7, 9, 3, 2, 3, 8],
//     [4, 6, 2, 6, 4, 7, 3, 1],
//     [5, 9, 2, 7, 1, 4, 6, 5],
//     [9, 7, 9, 3, 2, 1, 0, 8]
// ];

// $valeurMax = 0;

// for ($i=0; $i < 12 ; $i++) { 
//     for ($j= 0; $j < 8 ; $j++) { 
//         if ($T[$i][$j] > $valeurMax) {
//             $valeurMax = $T[$i][$j];
//         }
//     }
// }

// echo " la plus grande valeur de ce tableau multidimentionnel est : " , $valeurMax;

// 2°) 1. Pour chacune des figures suivantes, écrire et commenter votre algorithme 

// $etoile = "*";

// $tab = [];


// for ($i=1; $i <= 7; $i++) { 
// $ligne = str_repeat($etoile, $i);
// array_push($tab, $ligne);
// }

// for ($i= 6 ; $i >= 1 ; $i--) { 
//     $ligne = str_repeat($etoile , $i);
//     array_push($tab, $ligne);
// }

// foreach ($tab as $ligne) {
// echo $ligne , "\n";
// }

//  J'initialise une variable etoile ainsi que mon tableau, ensuite, je viens faire une boucle for qui tant que l'index est plus petit ou egal a 6 elle increase , je declare la constante $ligne  et je viens lui atribué la valeur de etoile et je lui demande avec la fonction str repeat de repeté la variable etoile autant de fois que la position de l'index dans la boucle puis je push dans le tableau la ligne , je fais le même principe avec la deuxieme boucle for mais cette fois je viens decrease si l'index est = a 5 et tant qu'il sera plus grand ou egal a 1 et je re push la ligne dans le tabeleau, puis pour l'affichage du resulat je demande a la boucle foreach de parcourir toute les ligne du tableau avec un saut de ligne a chaque ligne pour afficher la figure voulu

// 2°) 2.Pour chacune des figures suivantes, écrire et commenter votre algorithme 


// $tab =[];
// $etoile = "X";
// $rond = "0" ;

// for ($i=0; $i < 8; $i++) { 
//     $ligne = str_repeat($etoile, $i);
    
//     if ($i < 3 || $i > 6) {
//         array_push($tab, $ligne);
//     }else{
//         $ligne = str_repeat($etoile, 1) . str_repeat($rond, $i - 2) . str_repeat($etoile, 1);
//         array_push($tab, $ligne);

//     }
// }

// foreach ($tab as $ligne) {
//     echo $ligne , "\n";
// }


    