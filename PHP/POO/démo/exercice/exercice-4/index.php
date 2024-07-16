<?php
require_once "Chene.class.php";
require_once "Rose.classe.php";

$chene = new Chene("Le chêne","arbre","20 mètres","100 ans ", "Fagacées","brun");
$rose = new Rose ("La rose", "fleur" , "10cm", "10ans","rosace", "rose","la rose à des épines");

$chene->afficherChene();
$chene->pousser();

$rose->afficherRose();
$rose->pousser();