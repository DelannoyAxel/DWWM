<?php


ob_start();
?>

<div class="formulaire-calcul">
    <form action="resultat.php" method="POST">
        <div class="input-calc">
            <label for="nombre1">Entrer le nombre 1</label>
            <input type="number" name="nombre1" id="nombre1">
            <br>
            <label for="nombre2">Entrer le nombre 2</label>
            <input type="number" name="nombre2" id="nombre2">
            <br>
        </div>
        <div class="boutons">
            <button type="submit" name="operation" value="Addition">Addition</button>
            <button type="submit" name="operation" value="Soustraction">Soustraction</button>
            <button type="submit" name="operation" value="Multiplication">Multiplication</button>
            <button type="submit" name="operation" value="Division">Division</button>
        </div>
    </form>
</div>

</form>


<?php
$content = ob_get_clean();
$titre = "Je suis la calculatrice";
require "template.php";
?>