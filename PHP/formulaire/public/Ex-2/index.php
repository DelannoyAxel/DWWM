<?php ob_start(); ?>




<?php
    $content = ob_get_clean();
    $titre = "Je suis une calculatrice";
    require "template.php";
?>