<?php

ob_start();
require_once "dbConnect.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if (isset($_POST['email'])) {
    $email = $_POST["email"];
    $pdo = getPDOConnexion();
    // preparation de la requete SQL 
    $stmt = $pdo->prepare('SELECT id FROM Users WHERE email = ?');
    // execution de la requete
    $stmt->execute([$email]);
    // récuperation du résultat 
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION["user_id"] = $user['id'];
        header('Location:index.php');
        exit();
    } else {
        $error = "Utilisateur non trouvé";
    }
}
?>


<div class="login-container">
    <?php if (isset($error)) : ?>
        <p class="error"><?= htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form action="" method="POST">
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
        <input type="submit" value="Connexion">
    </form>
</div>


<?php
$content = ob_get_clean();
$titre = "Identification Espace Admin";
require "template.php";
?>
