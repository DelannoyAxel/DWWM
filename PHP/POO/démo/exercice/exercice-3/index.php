<?php

require "produit.classe.php";

$produit1 = new Produit("Jagermeister", "21€", "5");
$produit2 = new Produit("Jack Daniels", "22€", "3");
$produit3 = new Produit("Triple secret des moines", "4€", "15");
$produit4 = new Produit("Paix dieu", "6.50€", "10");

$produit1->affichage();
$produit2->affichage();
$produit3->affichage();
$produit4->affichage();



