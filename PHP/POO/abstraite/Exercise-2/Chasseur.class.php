<?php

require_once "Humain.class.php";
require_once "Lapin.class.php";

class Chasseur extends Humain implements iAnimals
{
    protected $arme;

    public function __construct(string $nom, string $arme)
    {
        parent::__construct($nom);
        $this->arme = $arme;
        echo "$this->nom à été crée avec un $this->arme <br>";
    }

    
    public function seDeplacer()
    {
        echo "$this->nom avance avec son $this->arme <br>";
    }

    public function chasser(Lapin $lapin)
    {
        echo "$this->nom tire sur le lapin avec son $this->arme et ...<br>";
        $chasse = rand(1,6);
        if ($chasse== 1 || $chasse == 6) {
            echo "Le lapin est toucher !";
            $lapin->setEnVie(false);
        }else{
            echo "Il le rate !";
        }
    }

    // public function getArme()
    // {
    //     return $this->arme;
    // }

    // public function setArme($arme)
    // {
    //     $this->arme = $arme;
    // }

  


    public function manquer()
    {
        echo "Le chasseur a manqué le lapin ! <br>";
    }

    public function tirer()
    {
        echo "Le chasseur tire ! <br>";
        return rand(1, 6);
    }
}

?>
