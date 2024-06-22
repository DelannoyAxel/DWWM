<?php

require_once "animal.class.php";

class Chien extends Animal{

    public function parler()
    {
        return "le chien aboie : woof!";
    }
}

?>