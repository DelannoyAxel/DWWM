<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="POST">

    <p>Centre d'interet : </p>

    <input type="checkbox" name="interet[]" value="musique" checked>
    <label for="music">Musique</label>

    <input type="checkbox" name="interet[]" value="voyage" >
    <label for="voyage">Voyage</label>

    <input type="checkbox" name="interet[]" value="lecture" >
    <label for="lecture">Lecture</label>

    <input type="checkbox" name="interet[]" value="cinema" checked>
    <label for="cinema">Cinema</label>

    <input type="submit" value="Envoyer">


</form>
    
<?php 

if (isset($_POST["interet"]) &&  is_array(($_POST["interet"]))) {
$interets = $_POST['interet'];
foreach ($interets as $interet) {
    echo ($interet) . "<br>";
}
}else {
    echo "aucun intéret selectioné";
}

?>
</body>
</html>