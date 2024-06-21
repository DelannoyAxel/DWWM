<?php
ob_start();
require_once "auth.php";

verifAdmin();
?>



<div class="form-container">
    <form  method="POST" onsubmit="return validateForm(event)">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required><br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required><br>

        <label for="pwd">Password:</label>
        <input type="password" name="pwd" id="pwd" required><br>

        <label for="telephone">Téléphone:</label>
        <input type="text" name="telephone" required><br>

        <label for="role">Rôle:</label>
        <select name="role" required>
            <option value="admin">Admin</option>
            <option value="non-admin">Non-Admin</option>
        </select><br>

        <input type="submit" value="Ajouter">
    </form>


<?php

if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pwd'], $_POST['telephone'], $_POST['role'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $telephone = $_POST['telephone'];
    $role = $_POST['role'];

    // Vérification du mot de passe avec regex
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password)) {
        echo "<p>Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial.</p>";
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $pdo = getPDOConnexion();

        $stmt = $pdo->prepare('INSERT INTO users(nom, prenom, email, pwd, telephone) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$nom, $prenom, $email, $password, $telephone]);

        $userId = $pdo->lastInsertId();

        $stmt = $pdo->prepare('INSERT INTO userroles (user_id, role) VALUES (?, ?)');
        $stmt->execute([$userId, $role]);

        echo "Utilisateur ajouté avec succès";
    }
} else {
    echo "Tous les champs ne sont pas remplis";
}


?>

</div>
<script src="form.js"></script>

<?php
$content = ob_get_clean();
$titre = "Ajouter un utilisateur";
require "template.php";
?>
