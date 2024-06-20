<?php

class Plante{
    private $nom ;
    private $type;
    private $hauteur;
    private $dureeDeVie;
    private $famille;


    // Constructeur

    public function __construct($name,$type,$hauteur,$dureeDeVie,$famille)
    {
        $this->nom = $name;
        $this->type = $type;
        $this->hauteur = $hauteur;
        $this->dureeDeVie = $dureeDeVie;
        $this->famille =$famille;
        
    }


    // getter
    public function __getNom(){return $this->nom;}
    public function __getType(){return $this->type;}
    public function __getHauteur(){return $this->hauteur;}
    public function __getDureeDeVie(){return $this->dureeDeVie;}
    public function __getFamille(){return $this->famille;}


    // setter

    public function __setNom($name){
        $this->nom = $name;
    }
    public function __setType($type){
        $this->type = $type;
    }
    public function __setHauteur($hauteur){
        $this->hauteur = $hauteur;
    }
    public function __setDureeDeVie($dureeDeVie){
        $this->dureeDeVie = $dureeDeVie;
    }
    public function __setFamille($famille){
        $this->famille = $famille;
    }

    
    

// methode afficher les plantes

public  function affichage(){
    echo "Nom : $this->nom" . "<br>";
    echo "Type : $this->type" . "<br>";
    echo "Hauteur : $this->hauteur" . "<br>";
    echo "Durée de vie : $this->dureeDeVie" . "<br>";
    echo "Famille : $this->famille" . "<br>";
    echo "************************************<br>";

}

}



?>