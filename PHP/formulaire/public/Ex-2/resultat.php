<?php
require "fonctions.php";

if (isset($_POST['nombre1'], $_POST['nombre2'], $_POST['operation'])) {
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $operation = $_POST['operation'];
  
} else {
    $message = "Veuillez entrer tous les champs.";
}
$resultat = operation($operation, $nombre1, $nombre2);

ob_start();
?>

<div class="resulat-operation">
    <?php if ($resultat) : ?>
        <p><?= $resultat; ?></p>
    <?php else : ?>
        <p><?= $message; ?></p>
    <?php endif; ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Résultat du calcul";
require "template.php";
?>
