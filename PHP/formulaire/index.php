<?php ob_start(); ?>

<h2>Bonjour ! </h2>

<?php
$content = ob_get_clean();
$titre = "Ma page d'acceuil";
require "template.php";
?>