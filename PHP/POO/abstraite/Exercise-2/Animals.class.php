<?php

require_once "iAnimals.class.php";

abstract class Animals  implements iAnimals {

    protected $couleur;
    protected $nombrePatte;


    public function __construct(string $couleur, int $nombrePatte)
    {
        $this->couleur = $couleur;
        $this->nombrePatte = $nombrePatte;
        echo "Le lapin " . $this->couleur . " à" . $this->nombrePatte . "pattes a été crée <br>";
    }

    public function getCouleur (){
        return  $this->couleur;
    }
    public function getNombrePatte (){
        return  $this->nombrePatte;
    }


    public function setCouleur ($couleur){
        $this->couleur = $couleur;
    }

    public function setNombrePatte ($nombrePatte){
        $this->nombrePatte = $nombrePatte;
    }

    abstract public function crier();


}




