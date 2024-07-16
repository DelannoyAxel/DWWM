<?php 

class Rose extends Plante {
    private $couleur;
    private $particularite;

    public function __construct($nom,$type,$hauteur,$dureeDeVie,$famille,$couleur,$particularite)
    {
        parent::__construct($nom, $type, $hauteur, $dureeDeVie, $famille,$particularite);
        $this->couleur = $couleur;

        $this->particularite= $particularite;
    }

    public function getParticularite(){
        return $this->particularite;
    }

    public function setParticularite($particularite){
        $this->particularite = $particularite;
    }

    public function afficherRose(){
        $this->afficher();
        echo "Couleur : $this->couleur <br>";
        echo "Particularite : $this->particularite <br>";
    }
    
    public function pousser(){
        echo $this->nom . " pousse au printemps ! <br>";
        echo "****************************** <br>";
    }
}