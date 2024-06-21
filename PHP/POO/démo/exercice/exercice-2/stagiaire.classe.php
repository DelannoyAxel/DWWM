<?php 

class Stagiaire{


private $nom;
public $notes;



public function __construct(string $nom, array $notes) {
    $this->nom = $nom;
    $this->notes = $notes;
}



// getter
public function __getNom(){
    return $this->nom;
}
public function __getNotes(){
    return $this->notes;
}


// setter

public function __setNom($nom){
    $this->nom = $nom;
}

public function __setNotes($notes){
    $this->notes = $notes;
}


function calculerMoyenne (){
    return array_sum($this->notes) / count($this->notes);
}

function trouverMax(){
    return Max($this->notes) ;
}
function trouverMin(){
    return Min($this->notes);

}

public function affichage() {
    echo "Nom : " . $this->nom . "<br>";
    echo "Notes : " . implode(", ", $this->notes) . "<br>";
    echo "Moyenne : " . $this->calculerMoyenne() . "<br>";
    echo "Note Max : " . $this->trouverMax() . "<br>";
    echo "Note Min : " . $this->trouverMin() . "<br>";

    echo"********************************************* <br>";
}

}