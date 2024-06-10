<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire d'inscription avec verification </title>
</head>


<body>

    <?php
    $nom = "";
    $email = "";
    $mdp = "";
    $verifMdp = "";
    $dateDeNaissance = "";

    
    ?>

    <div class="titre">
        <h2>Bonjour, veuillez vous inscrire</h2>
    </div>

    <div class="formulaire">
        <form action="traitement.php" method="POST">

            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($nom); ?>"  required> <br>

            <label for="email">Adresse email :</label>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($email); ?>" required><br>


            <label for="mdp">Mot de passe (8 characters minimum) :</label>
            <input type="password" name="mdp" id="mdp" minlength="8" value="<?= htmlspecialchars($mdp); ?>" required> <br>

            <label for="verifMdp">Saisissez a nouveau votre mot de passe :</label>
            <input type="password" name="verifMdp" id="verifMdp" minlength="8" value="<?= htmlspecialchars($verifMdp); ?>" required> <br>

            <label for="dateDeNaissance">Date de naissance :</label>
            <input type="date" name="dateDeNaissance" id="dateDeNaissance" required> <br>


            <label for="sexe">Sexe :</label>
            <div class="sexe-container">
                <input type="radio" name="sexe" id="sexe-homme" value="homme" required>
                <label for="sexe-homme">Homme</label>

                <input type="radio" name="sexe" id="sexe-femme" value="femme" required>
                <label for="sexe-femme">Femme</label>
            </div>
            <input type="submit" value="Envoyer">
        </form>
    </div>


    <?php

// Verification du nom 
if (isset($_POST["nom"])) {
    $nom = filter_input(INPUT_POST, "nom" , FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!ctype_alpha($nom)) {
        echo "Entrez un nom valide";
        $nom = ""; 
    }
}

// Verification du mail 

    if (isset($_POST["email"])) {
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        
    }

// Verification des mots de passe identique 


    if (isset($_POST["mdp"]) && isset($_POST["verifMdp"])) {
        $mdp = filter_input(INPUT_POST, "mdp", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $verifMdp = filter_input(INPUT_POST, "verifMdp" , FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if ($mdp !== $verifMdp) {
           echo "<p>Vos mot de passe ne sont pas identique, veuillez recommencer</p>";
           
        }else {
            $passwordMatch = true;
        }
    }

// Verification si l'utilisateur est majeur 

    $dateActuelle = date("d-m-Y");
    $estMajeur = false;

    if (isset($_POST["dateDeNaissance"])) {
        $dateDeNaissance = $_POST["dateDeNaissance"];
        // Je transofme la date de naissance et la date actuelle en format secondes
        $timestampDateNaissance = strtotime($dateDeNaissance);
        $timestampDateActuelle = strtotime($dateActuelle);

        $difference = $timestampDateActuelle - $timestampDateNaissance;

        // J'utilise floor pour arrondire a l'entier inferieur le resultat de l'operation : $differences / par seconde, minute, jour, année
        $age = floor($difference / (60 * 60 * 24 * 365));

        if ($age >= 18) {
            $estMajeur = true;
        }else {
            echo "tu est mineur tu ne peux pas pas t'inscrire";
        }
        // Formater la date de naissance pour l'affichage
        $dateDeNaissanceFormatee = date("d-m-Y", $timestampDateNaissance);
    } 

// Verification si les input radio sont rempli 
    $sexe = "";
    if (isset($_POST["sexe"])) {
        $sexe = $_POST["sexe"];
    }

    if ($nom  && $email  && $passwordMatch  && $dateDeNaissance ) {
        echo "Felicitation tu es inscrit,";
    }
    ?>



</body>

</html>