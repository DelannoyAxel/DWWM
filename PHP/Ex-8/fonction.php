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



// function nouveauContact($repertoire) {
//     $nom = readline("Entrer le nom de votre contact: ");
//     $prenom = readline("Entrer le prénom de votre contact: ");
//     $tel = readline("Entrer le numéro de téléphone de votre contact: ");

//     $contact = [
//         "nom" => $nom,
//         "prenom" => $prenom,
//         "tel" => $tel
//     ];
    
//     $repertoire[] = $contact;


// }

function rechercheContact($repertoire) {
    $recherche = readline("Entrer le nom de votre contact : ");

    foreach ($repertoire as $contact) {
        if ($contact['nom'] === $recherche) {
            return $contact;
        }
    }

    return null;
}

function toutAfficher($repertoire){
    foreach ($repertoire as $contact) {
        echo "Voici les informations de votre contact : \n";
        echo "Nom : " . $contact . "\n";
        echo "Prénom : " . $contact . "\n";
        echo "Téléphone : " . $contact. "\n";
    }
}