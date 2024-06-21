<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Produits</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="product-display">
        <?php
        require "produit.classe.php";

        $produit1 = new Produit("Jagermeister", "21€", "5");
        $produit2 = new Produit("Jack Daniels", "22€", "3");
        $produit3 = new Produit("Triple secret des moines", "4€", "15");
        $produit4 = new Produit("Paix dieu", "6.50€", "10");

        echo "<h3>Produits initiaux:</h3>";
        $produit1->affichage();
        $produit2->affichage();
        $produit3->affichage();
        $produit4->affichage();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($_POST['jager_price'])) {
                $produit1->mettreAJourPrix($_POST['jager_price']);
            }
            if (!empty($_POST['jager_quantity'])) {
                $produit1->ajouterStock($_POST['jager_quantity']);
            }
            if (!empty($_POST['jager_sold'])) {
                $produit1->vendreProduit($_POST['jager_sold']);
            }

            if (!empty($_POST['jack_price'])) {
                $produit2->mettreAJourPrix($_POST['jack_price']);
            }
            if (!empty($_POST['jack_quantity'])) {
                $produit2->ajouterStock($_POST['jack_quantity']);
            }
            if (!empty($_POST['jack_sold'])) {
                $produit2->vendreProduit($_POST['jack_sold']);
            }

            if (!empty($_POST['triple_price'])) {
                $produit3->mettreAJourPrix($_POST['triple_price']);
            }
            if (!empty($_POST['triple_quantity'])) {
                $produit3->ajouterStock($_POST['triple_quantity']);
            }
            if (!empty($_POST['triple_sold'])) {
                $produit3->vendreProduit($_POST['triple_sold']);
            }

            if (!empty($_POST['paix_price'])) {
                $produit4->mettreAJourPrix($_POST['paix_price']);
            }
            if (!empty($_POST['paix_quantity'])) {
                $produit4->ajouterStock($_POST['paix_quantity']);
            }
            if (!empty($_POST['paix_sold'])) {
                $produit4->vendreProduit($_POST['paix_sold']);
            }

            echo "<h3>Après les opérations:</h3>";
            $produit1->affichage();
            $produit2->affichage();
            $produit3->affichage();
            $produit4->affichage();
        }
        ?>
    </div>

    <form action="" method="POST" class="product-form">
        <h2>Jagermeister</h2>
        <label for="jager_price">Nouveau prix :</label>
        <input type="text" id="jager_price" name="jager_price">
        <label for="jager_quantity">Nouvelle quantité :</label>
        <input type="text" id="jager_quantity" name="jager_quantity">
        <label for="jager_sold">Quantité vendue :</label>
        <input type="text" id="jager_sold" name="jager_sold">

        <h2>Jack Daniels</h2>
        <label for="jack_price">Nouveau prix :</label>
        <input type="text" id="jack_price" name="jack_price">
        <label for="jack_quantity">Nouvelle quantité :</label>
        <input type="text" id="jack_quantity" name="jack_quantity">
        <label for="jack_sold">Quantité vendue :</label>
        <input type="text" id="jack_sold" name="jack_sold">

        <h2>Triple secret des moines</h2>
        <label for="triple_price">Nouveau prix :</label>
        <input type="text" id="triple_price" name="triple_price">
        <label for="triple_quantity">Nouvelle quantité :</label>
        <input type="text" id="triple_quantity" name="triple_quantity">
        <label for="triple_sold">Quantité vendue :</label>
        <input type="text" id="triple_sold" name="triple_sold">

        <h2>Paix dieu</h2>
        <label for="paix_price">Nouveau prix :</label>
        <input type="text" id="paix_price" name="paix_price">
        <label for="paix_quantity">Nouvelle quantité :</label>
        <input type="text" id="paix_quantity" name="paix_quantity">
        <label for="paix_sold">Quantité vendue :</label>
        <input type="text" id="paix_sold" name="paix_sold">

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
