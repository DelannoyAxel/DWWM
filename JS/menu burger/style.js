// Récupérer le bouton du menu burger
const burgerMenu = document.getElementById('burgerMenu');

// Ajouter un écouteur d'événements pour le clic sur le bouton
burgerMenu.addEventListener('click', function() {
    // Basculer la classe 'change' sur le bouton
    burgerMenu.classList.toggle('change');
});


const menu = document.getElementById('menu');

burgerMenu.addEventListener('click', () => {
    menu.classList.toggle('show');
});