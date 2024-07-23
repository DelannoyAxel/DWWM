import React, { Component } from "react";
import Personne from "./Personne";

// class App extends React.Component{
//     render (){
//        return <h1>Hello World !</h1>
//     }
// }


class App extends React.Component {
    
    calculerAnneeDeNaissance(age) {
    const dateActuelle  = new Date();
    const anneeActuelle = dateActuelle.getFullYear();
    return anneeActuelle - age;
    }

    render() {
        return (
            <>
                <Personne nom="Titi" age={30} annee={this.calculerAnneeDeNaissance(30)} sexe="homme" />
                <Personne nom="Toto" age={10} annee={this.calculerAnneeDeNaissance(10)} sexe="femme" />
                <Personne nom="Riri" age={35} annee={this.calculerAnneeDeNaissance(35)} sexe="femme" />
                <Personne nom="Fifi" age={20} annee={this.calculerAnneeDeNaissance(20)} sexe="homme" />
                <Personne nom="Loulou" age={18} annee={this.calculerAnneeDeNaissance(18)} sexe="homme" />
            </>
        );
    }
}

export default App;
