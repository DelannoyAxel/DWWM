<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-container">
        <h2>Connexion</h2>
        <form action="login.php" method="POST">
            <div class="input-group">
                <label for="email">Adresse Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" minlength="8" required>
            </div>
            <button type="submit">Connexion</button>
        </form>
    </div>


    <?php

    // Initialise les variables avec des chaînes vides pour éviter les erreurs
    $email = $username = $password = "";

    // Traite les données du formulaire lorsque le formulaire est soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = htmlspecialchars($_POST["email"]);
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
    }

    if (isset($_POST["email"])) {
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    }

    if (isset($_POST["username"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (isset($_POST["password"])) {
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    ?>


</body>

</html>