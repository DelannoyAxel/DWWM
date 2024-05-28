<?php

require "fonction.php";

$repertoire = [];
// $choix = "Bonjour, que souhaitez-vous faire?\n" .
//           "1. Ajouter un contact\n" .
//           "2. Rechercher un contact\n" .
//           "3. Afficher tous les contacts\n" .
//           "Q. Quitter le programme\n";


// $saisie = readline($choix);


$contactTrouve = rechercheContact($repertoire);

if ($contactTrouve !== null) {
    echo "Voici les informations de votre contact : \n";
    echo "Nom : " . $contactTrouve['nom'] . "\n";
    echo "Prénom : " . $contactTrouve['prenom'] . "\n";
    echo "Téléphone : " . $contactTrouve['tel'] . "\n";
} else {
    echo "Aucun contact trouvé avec ce nom.\n";
}