// const button = document.getElementById ('mybutton');
// button.addEventListener ('click', function() {paragraph.textContent = 'Hello, world!';

// });
// Exercise 1
// document.addEventListener('DOMContentLoaded', function() {
//     const button = document.getElementById('myButton');
//     const paragraph = document.getElementById('myParagraph');

//     button.addEventListener('click', function() {
//         paragraph.textContent = 'Hello, world!';
//     });
// });



// let button = document.getElementById ('myButton');
// let paragraphe = document.getElementById('myParagraph')

// button.addEventListener ('click' , function() {
//     paragraphe.style.color = 'red';
// })

// let button = document.querySelector('#myButton');

// button.addEventListener('click', function() {
//     // Crée un nouvel élément bouton
//     let newButton = document.createElement('button');

//     // Ajoutez du texte au nouveau bouton
//     newButton.textContent = 'Nouveau bouton!';

//     // Ajoutez une classe ou un ID si nécessaire
//     // newButton.classList.add('newButtonClass');
//     // newButton.id = 'newButtonId';

//     // Ajoutez le nouvel élément bouton à votre document
//     document.body.appendChild(newButton);
// });




// // ### Exercice 4 : Suppression d'éléments

// // Ajoutez plusieurs éléments de type `<li>` à une liste `<ul>` sur votre page HTML. Ajoutez un bouton à la page. Lorsque vous cliquez sur ce bouton, le premier élément de la liste doit être supprimé.

// let ul = document.querySelector('#ul');
// let button = document.querySelector('#myButton');

// button.addEventListener('click', function() {
//     let firstChild = ul.firstElementChild;
//     if (firstChild) {
//         ul.removeChild(firstChild);
//     }
// });


// ### Exercice 5 : Gestion d'événements multiples

// Ajoutez trois boutons à votre page HTML, chacun ayant un identifiant unique. Créez une seule fonction de gestionnaire d'événements JavaScript. Lorsque vous cliquez sur l'un des boutons, un message s'affiche dans la console indiquant l'identifiant du bouton sur lequel vous avez cliqué.

let button = document.querySelectorAll('#myButton1, #myButton2, #myButton3')


button.forEach(button => {
    button.addEventListener('click', function () {
        console.log(button.id);
    });

});