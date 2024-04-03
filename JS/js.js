// // fonction
// let addition

// function add(valeur1, valeur2,valeur3){
// const a = valeur1 ;
// const b = valeur2 ;
// const c = valeur3 ;

// addition = a + b + c
// }

// add (1, 3,102)

// console.log(addition);

// // ----------------

// function saluer(alice) {
//     return "Bonjour, " + alice + "!";
// }
// console.log(saluer("Alice"));

// // ---------------------------

// let multiplication

// function multi(valeurA, valeurB){

//     const a = valeurA ;
//     const b = valeurB ;

//     multiplication = a * b

// }
// multi (7, 8)

// console.log(multiplication);

// // -------------

// function test (a, b){
//     return (a * b)
//     }
//     console.log (test (4,6));

    // ------------------------


Exercise 1

let age = prompt("entrez votre age");
if (age >= 18){
console.log("majeur");
}

else{
console.log("mineur");
}


// Exercise 2

for (let i = 1; i <= 20; i++) {
    if (i % 2 === 0) {
        console.log(i);
    }
}

let nombre = prompt("Entrez un nombre entre 1 et 100");

while (nombre !== "69") {
    console.log("Dommage, ce n'est pas le bon nombre LOSER .");
    nombre = prompt("Entrez un autre nombre :");
}

    console.log("Bravo ! Vous avez trouvé le nombre 69  WINNER !");
    

// Correction exercise 2
const randomNumber = Math.floor((Math.random() * 100) + 1)

let inputUser = prompt("Veuillez entrer une valeur entre 1 et 100")

while (isNaN(inputUser)){
    inputUser = prompt("Veuillez entrer un nombre entre 1 et 100")
}  

while (inputUser != randomNumber){
    if (inputUser > randomNumber){
        inputUser = prompt("Le nombre est trop haut")
    }
    
    if (inputUser < randomNumber){
        inputUser = prompt("le nombre est trop bas")
    }

    if (inputUser == randomNumber){
        console.log("c'est gagné");
    }

}

// // exercise 3

switch (annes) {
    case valeur1:
      Janvier
      break;
    case valeur2:
      fevrier
      break;
    case valeur3:
        mars
    break;
    case valeur4:
      avril
      break;
      case valeur5:
      mai
      break;
      case valeur6:
      juin
      break;
      case valeur7:
      juillet
      break;
      case valeur8:
      aout
      break;
      case valeur9:
      septembre
      break;
      case valeur10:
      octobre
      break;
      case valeur11:
      novembre
      break;
      case valeur12:
      decembre
      break;

  }
  switch (mois) {
    case Janvier:
    "30 days"
      break;
    case favrier:
    "28 days"
      break;
    case mars:
    "31 days"
    break;
    case avril:
    "30 days"
      break;
      case mai:
    "31 days"
      break;
      case juin:
    "30 days"
      break;
      case juillet:
    "31 days" 
      break;
      case aout:
    "30 days"
      break;
      case septembre:
    "31 days"
      break;
      case octobre:
    "30 days"
      break;
      case novembre:
    "31 days"
      break;
      case decembre:
    "30 days"
      break;

  }
 
  