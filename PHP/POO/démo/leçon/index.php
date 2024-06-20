<?php 
require "index.php";

$chene = new Plante ("le chene", "arbre", "20 mettre", "100 ans", "fagacées" );
$rose = new Plante('la rose', "fleur", "1mettre", "2ans", "rosacée" );
$tournesol = new Plante("le tournsol", "fleur", "3mettre", "1 ans", "asteracees");

$chene->affichage();
$rose->affichage();
$tournesol->affichage();



$chene->__setHauteur("50metres");
$chene->affichage();
