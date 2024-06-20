<?php


class Produit{


    private $nom;
    private $prix;
    private $quantite;


    // constructeur
    public function __construct($nom,$prix,$quantite) {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->quantite = $quantite;

    }



    // getter

    public function __getNom(){
        return $this->nom;
    }
    public function __getPrix()
    { 
        return $this->prix;
    }
    public function __getQuantite()
    {
        return $this->quantite;
    }
   

    // setter

    public function __setNom($nom)
    {
        $this->nom = $nom;
    }

    public function __setPrix($prix){
        $this->prix = $prix;
    }

    public function __setQuantite($quantite){
        $this->quantite = $quantite;
    }



    function affichage(){
        echo "Nom : " . $this->nom . "<br>";
        echo "Prix : " . $this->prix . "<br>" ;
        echo "Quantité disponible : " . $this->quantite . "<br>";
        echo"********************************************* <br>";


    }

}