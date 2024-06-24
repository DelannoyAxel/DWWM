<?php

require_once "Lapin.class.php";
require_once "Chasseur.class.php";


$lapin = new Lapin(" Lapin Blanc", 4);
$chasseur = new Chasseur("Titi", "fusil");


// test de la methode getEnVie et setEnVie

echo "test de modification de l'état du lapin : <br>";
echo "initalement, le lapin est en vie " . ($lapin->estEnVie() ? "Oui" : "Non");

$lapin->setEnVie(true);
echo "Après avoir modifier l'état, le lapin est en vie " . ($lapin->estEnVie() ? "Oui" : "Non");

$lapin->seNourrir();

while ($lapin->estEnVie()) {
    $chasseur->seDeplacer();
    $lapin->crier();
    $chasseur->chasser($lapin);
    $lapin->fuir();
    $resultatTir = $chasseur->tirer();

    if (!$lapin->estEnVie()) {
        break;
    }

    $lapin->fuir();
}
