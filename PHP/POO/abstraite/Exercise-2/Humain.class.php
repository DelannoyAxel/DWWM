<?php

require_once "iAnimals.class.php";

abstract class Humain implements iAnimals {

    protected $nom;


    public function __construct($nom)
    {
        $this->nom = $nom;
        echo "$this->nom  à été crée <br>";
    }

    // public function getNom (){
    //     return  $this->nom;
    // }


    // public function setNom ($nom){
    //     $this->nom = $nom;
    // }



}