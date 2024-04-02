const personne = {
    nom : 'alice',
    age : '25',
    ville: 'paris'
};
console.log(personne.nom)

// ----------------------

// const solde = 1000;
// const solde2 = 500;
// const titulaire = "John Doe";

// const compteBefore = {
//     solde : solde,
//     titulaire :titulaire
// };
// console.log("Solde initial :" , compteBefore)

// const soldeFinal = solde + solde2;

// const compteAfter = {
//     solde: soldeFinal,
//     titulaire: titulaire
// };

// console.log("Solde final :" , compteAfter);



// Création de l'objet compte bancaire
let compteBancaire = {
    solde: 1000,
    titulaire: "John Doe"
};

// Affichage du solde initial
console.log("Solde initial :", compteBancaire.solde);

// Modification du solde en ajoutant 500
compteBancaire.solde += 500;

// Affichage du solde après la modification
console.log("Solde après ajout de 500 :", compteBancaire.solde);
