<?php


class Voiture
{
    private $marque;
    private $modele;
    private $annee;
    private $couleur;
    public $vitesseActuelle = 0;


    public function __construct($marque, $modele, $annee, $couleur, $vitesseActuelle)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->couleur = $couleur;
        $this->vitesseActuelle = $vitesseActuelle;
    }


    public function __getMarque()
    {
        return $this->marque;
    }
    public function __getModele()
    {
        return $this->modele;
    }
    public function __getAnnee()
    {
        return $this->annee;
    }
    public function __getCouleur()
    {
        return $this->couleur;
    }
    public function __getVitesseActuelle()
    {
        return $this->vitesseActuelle;
    }


    public function __setMarque($marque)
    {
        $this->marque = $marque;
    }
    public function __setModele($modele)
    {
        $this->modele = $modele;
    }
    public function __setAnnee($annee)
    {
        $this->annee = $annee;
    }
    public function __setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }
    public function __setVitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;
    }



    public function affichage()
    {

        echo "Marque : $this->marque" . "<br>";
        echo "Modele : $this->modele" . "<br>";
        echo "Année : $this->annee" . "<br>";
        echo "Couleur: $this->couleur" . "<br>";
        echo "Vitesse actuelle: $this->vitesseActuelle" . "<br>";

        echo "************************************<br>";
    }


    public function accelerer($vitesse)
    {
        $this->vitesseActuelle += $vitesse;
    }
}
