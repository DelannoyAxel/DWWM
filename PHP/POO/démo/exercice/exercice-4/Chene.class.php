<?php 

require "plante.php";

class Chene extends PLante {

    private $couleur;

    public function __construct($nom,$type,$hauteur,$dureeDeVie,$famille,$couleur){
        parent::__construct($nom, $type, $hauteur, $dureeDeVie, $famille);
        $this->couleur = $couleur;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function afficherChene(){
        $this->afficher();
        echo "Couleur : $this->couleur <br>";
    }

    public function pousser(){
        echo $this->nom . " pousse toute sa vie ! <br>";
        echo "****************************** <br>";
    }

}

