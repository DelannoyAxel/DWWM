<?php

require "employe.class.php";

$employe = new Employe ("Greg", "50000");
$manager = new Employe ("Tomate cerise", "70000");


$employe->afficherDetails();
$manager->afficherDetails();



?>

<form action="" method="POST">

<label for="ajoutEmploye"> Ajouter un employé</label>
<input type="text" name="ajoutEmploye" id="ajoutEmploye">
<input type="submit" value="Ajouter">
</form>

<?php

if (isset($_POST["ajoutEmploye"])) {
    
}