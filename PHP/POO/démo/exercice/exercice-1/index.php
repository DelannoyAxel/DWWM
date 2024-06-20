<?php 
require "voiture.classe.php";

$hyundai = new Voiture("Hyundai", "Veloster", "2013", "Blanche", "0");
$Renault = new Voiture("Renault", "Clio", "2016", "Noir", "0");




$hyundai->affichage();
$hyundai->accelerer(250);
$hyundai->affichage();

$Renault->affichage();
$Renault->accelerer(198);
$Renault->affichage();
