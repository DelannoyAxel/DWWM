// // // fonction
// // let addition

// // function add(valeur1, valeur2,valeur3){
// // const a = valeur1 ;
// // const b = valeur2 ;
// // const c = valeur3 ;

// // addition = a + b + c
// // }

// // add (1, 3,102)

// // console.log(addition);

// // // ----------------

// function saluer(alice) {
//     return "Bonjour, " + alice + "!";
// }
// console.log(saluer("Alice"));

// // ---------------------------

// // let multiplication

// // function multi(valeurA, valeurB){

// //     const a = valeurA ;
// //     const b = valeurB ;

// //     multiplication = a * b

// // }
// // multi (7, 8)

// // console.log(multiplication);

// // // -------------

// // function test (a, b){
// //     return (a * b)
// //     }
// //     console.log (test (4,6));

//     // ------------------------


// Exercise 1

// let age = prompt("entrez votre age");
// if (age >= 18){
// console.log("majeur");
// }

// else{
// console.log("mineur");
// }


// // Exercise 2

// for (let i = 1; i <= 20; i++) {
//     if (i % 2 === 0) {
//         console.log(i);
//     }
// }

// let nombre = prompt("Entrez un nombre entre 1 et 100");

// while (nombre !== "69") {
//     console.log("Dommage, ce n'est pas le bon nombre LOSER .");
//     nombre = prompt("Entrez un autre nombre :");
// }

//     console.log("Bravo ! Vous avez trouvé le nombre 69  WINNER !");


// // Correction exercise 2
// const randomNumber = Math.floor((Math.random() * 100) + 1)

// let inputUser = prompt("Veuillez entrer une valeur entre 1 et 100")

// while (isNaN(inputUser)){
//     inputUser = prompt("Veuillez entrer un nombre entre 1 et 100")
// }  

// while (inputUser != randomNumber){
//     if (inputUser > randomNumber){
//         inputUser = prompt("Le nombre est trop haut")
//     }

//     if (inputUser < randomNumber){
//         inputUser = prompt("le nombre est trop bas")
//     }

//     if (inputUser == randomNumber){
//         console.log("c'est gagné");
//     }

// }

// // // exercise 3



// function NombreDeJours(mois) {
//   switch (mois) {
//     case 1:  // Janvier
//     case 3: // Mars
//     case 5: // Mai
//     case 7: // Juillet
//     case 8: // Août
//     case 10: // Octobre
//     case 12: // Décembre
//       return 31;
//     case 4: // Avril
//     case 6:  // Juin
//     case 9:  // Septembre
//     case 11: // Novembre
//       return 30;
//     case 2: // Février
//       // Vérifie si l'année est bissextile
//       if ((annee % 4 === 0 && annee % 100 !== 0) || (annee % 400 === 0)) {
//         return 29; // Février a 29 jours pour une année bissextile
//       } else {
//         return 28; // Février a 28 jours pour une année non bissextile
//       }
//   }
// }
// let annee = new Date().getFullYear();

// for (let mois =1; mois <= 12; mois++) {
//   const nbJours = NombreDeJours(mois, annee);
//   console.log(`Nombre de jours pour le mois ${mois}: ${nbJours}`);
// }


function nombreDeJours(num) {
  let nombreDeJours;

  switch (num) {
    case 1:
      nombreDeJours = 31;
      break;
    case 2:
      let annee = new Date().getFullYear();
      if (annee % 4 == 0) {
        nombreDeJours = 29;
      } 
      else {
        nombreDeJours = 28;
      }
        break;
    case 3:
      nombreDeJours = 31;
      break;
    case 4:
      nombreDeJours = 30;
      break;
    case 5:
      nombreDeJours = 31;
      break;
    case 6:
      nombreDeJours = 30;
      break;
    case 7:
      nombreDeJours = 31;
      break;
    case 8:
      nombreDeJours = 31;
      break;
    case 9:
      nombreDeJours = 30;
      break;
    case 10:
      nombreDeJours = 31;
      break;
    case 11:
      nombreDeJours = 30;
      break;
    case 12:
      nombreDeJours = 31;
      break;
    default:
      nombreDeJours = "mois invalide";
  }

  console.log("nombre de jour : " + nombreDeJours);
}

nombreDeJours(2);


// function NombreDeJours (2);
