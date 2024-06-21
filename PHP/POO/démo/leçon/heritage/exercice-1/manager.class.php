<?php

require "employe.class.php";


class Manager extends Employe{

    protected $employesGeres;


    public function __construct($nom,$salaire,array $employesGeres)
    {
        $this->nom = $nom;
        $this->salaire = $salaire;
        $this->employesGeres = $employesGeres;
    }

    public function ajouterEmploye(Employe $employe){

    }


    public function afficherDetails(){
        parent::afficherDetails();
        echo "Nom : " . $this->nom . "<br>";
        echo "Salaire : " . $this->salaire ."€" ."<br>";
        echo "Employés gerés : " . $this->employesGeres . "<br>";

    }




}
