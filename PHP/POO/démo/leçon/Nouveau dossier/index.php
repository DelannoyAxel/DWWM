<?php 

class Bonjour{

    const MA_CONSTANTE ="bonjour, Hello";

    public function afficherMaConst(){
        echo self::MA_CONSTANTE;
    }
}


$instance = new Bonjour();
$instance->afficherMaConst();


