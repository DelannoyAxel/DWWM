<?php


ob_start();
?>
<div>
    <form action="traitement.php" method="POST">
        <label for="rayon">Entrez le rayon du cercle :</label>
        <br>
        <input type="number" name="rayon" id="rayon">
        <br>
        <input type="submit" value="Calculer">
    </form>
</div>
<?php
$content = ob_get_clean();
$titre = "Calcul sur le cercle";
require "template.php";
?>