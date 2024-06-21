<?php

class Produit {

    private $nom;
    private $prix;
    private $quantite;
    private $quantiteVendue;

    // Constructeur
    public function __construct($nom, $prix, $quantite, $quantiteVendue = 0) {
        $this->nom = $nom;
        $this->prix = floatval(str_replace("€", "", $prix));
        $this->quantite = intval($quantite);
        $this->quantiteVendue = intval($quantiteVendue);
    }

    // Getters
    public function getNom() {
        return $this->nom;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function getQuantiteVendue() {
        return $this->quantiteVendue;
    }

    // Setters
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrix($prix) {
        $this->prix = floatval($prix);
    }

    public function setQuantite($quantite) {
        $this->quantite = intval($quantite);
    }

    public function setQuantiteVendue($quantiteVendue) {
        $this->quantiteVendue = intval($quantiteVendue);
    }

    // Méthodes de gestion
    public function affichage() {
        echo "<p>Nom : " . $this->nom . "<br>";
        echo "Prix : " . $this->prix . "€<br>";
        echo "Quantité disponible : " . $this->quantite . "<br>";
        echo "Quantité vendue : " . $this->quantiteVendue . "<br>";
        echo "********************************************* <br></p>";
    }

    public function mettreAJourPrix($nouveauPrix) {
        $this->prix = floatval($nouveauPrix);
    }

    public function ajouterStock($quantiteAjoutee) {
        $this->quantite += intval($quantiteAjoutee);
    }

    public function vendreProduit($quantiteVendue) {
        $quantiteVendue = intval($quantiteVendue);
        if ($this->quantite >= $quantiteVendue) {
            $this->quantite -= $quantiteVendue;
            $this->quantiteVendue += $quantiteVendue;
        } else {
            echo "<p>Stock insuffisant pour $this->nom</p>";
        }
    }
}
?>
