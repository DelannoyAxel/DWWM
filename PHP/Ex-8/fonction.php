<?php

// Objectif : Vous devez créer un programme PHP qui permet de gérer un répertoire téléphonique en
// utilisant des fonctions

// 1. Créer un tableau pour stocker les contacts
// 2. Définir les fonctions suivantes :
//  Ajouter un nouveau contact au répertoire
//  Rechercher un contact par nom et retourne le contact trouvé ou « null » si le contact
// n’existe pas
//  Afficher tous les contacts du répertoire
// 3. Menu principal :
//  Permettre à l’utilisateur de choisir entre ajouter un contact, rechercher un contact
// par nom, afficher tous les contacts ou quitter le programme


$repertoire = [];

// Fonction pour ajouter des contacts
function PushTabl($nom, $numero) {
    global $repertoire;
    array_push($repertoire, [$nom, $numero]);
    echo "**********************************************\n";
    echo "Contact ajouté : $nom, $numero\n \n";
    echo "**********************************************\n";
}

// Fonction pour rechercher un contact
function recherche($nom) {
    global $repertoire;
    foreach ($repertoire as $contact) {
        if ($contact[0] === $nom) {
            return $contact[1];
        }
    }
    return "Contact non trouvé \n";
}

// Fonction pour voir tout les contacts
function toutVoir() {
    global $repertoire;
    if (count($repertoire) === 0) {
        echo "**********************************\n";
        echo "Le répertoire est vide.\n";
        echo "**********************************\n";
    } else {
        foreach ($repertoire as $contact) {
            
            echo "\n".$contact[0] . " " . $contact[1]."\n";
            
        }
    }
}