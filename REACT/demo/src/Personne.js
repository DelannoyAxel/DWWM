import React from "react";

function Personne(props) {

    return (
        <>
            <h1>Nom : {props.nom}</h1>
            <h2>Age : {props.age} / année de naissance : {props.annee} </h2>
            <h3>Sexe : {props.sexe}</h3>
        </>
    );
}

export default Personne;
