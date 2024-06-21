<?php
require "stagiaire.classe.php";

$eleve1 = new Stagiaire("Ethan", [5, 10, 18, 2, 14]);
$eleve2 = new Stagiaire("Axel", [20, 12, 18, 5, 17]);

$eleve1->affichage();
$eleve2->affichage();
?>


