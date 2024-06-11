<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Bienvenue</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="welcome-container">
        <?php if (isset($_SESSION["username"])) : ?>
            <p>Bienvenue <?= $_SESSION["username"] ?></p>
        <?php else : ?>
            <p>Vous n'êtes pas connecté</p>
        <?php endif; ?>

        <p>Souhaitez-vous vous déconnecter ?</p>

        <div class="btn">
            <form action="logout.php" method="POST">
                <button type="submit">Déconnexion</button>
            </form>
        </div>
    </div>
</body>

</html>