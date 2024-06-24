<?php

require_once "Animals.class.php";
require_once "iAnimals.class.php";

class Lapin extends Animals 
{
    private $enVie;

    public function __construct(string $couleur, int $nombrePatte)
    {
        parent::__construct($couleur,$nombrePatte);
        $this->enVie = true;
    }

    public function getEnVie(){
        return $this->enVie;
    }
    public function setEnVie(bool $enVie){
        $this->enVie = $enVie;
        if(!$this->enVie){
            echo "Le pauvre petit lapin est malheureusement mort <br>";
        }
    }


    public function seNourrir()
    {
        echo "Le lapin se nourrit ! <br>";
    }

    public function fuir()
    {
        $this->seDeplacer();
    }

    public function seDeplacer()
    {
        echo "Le lapin s'enfuit sur ses " . $this->nombrePatte . "pattes d'un seul bond ! <br>";
    }

    public function crier()
    {
        echo "Le lapin glapie de peur ! <br>";
    }

    public function estEnVie()
    {
        return $this->enVie;
    }

    // public function estMort()
    // {
    //     echo "Le lapin est mort ! <br>";
    //     $this->enVie = false; 
    // }


}

?>
