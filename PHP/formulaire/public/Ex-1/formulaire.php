<?php ob_start(); ?>

<div>
    <form action="" method="POST">
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom">

        <br>

        <label for="mail">Email : </label>
        <input type="email" name="mail" id="mail">
        <br>

        <input type="submit" value="Envoyer">

        <?php
        if (isset($_POST['nom']) && isset($_POST['mail'])) {
            $name = $_POST['nom'];
            $email = $_POST['mail'];

            echo "<p>Nom : $name </p>";
            echo "<p>Email  : $email </p>";
        } else {
            echo "<p>Aucune données soumise.</p>";
        }
        ?>
    </form>
</div>



<?php
$content = ob_get_clean();
$titre = "Exemple de formulaire";
require "template.php";
?>