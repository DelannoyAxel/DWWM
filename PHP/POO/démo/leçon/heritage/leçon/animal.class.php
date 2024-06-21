<?php

class Animal{

    public $nom;

    public function __construct($nom){
        $this->nom = $nom;
        
    }


    public function parler(){
        return "Cet annimal ne fait pas de bruit spécifique";
    }
}