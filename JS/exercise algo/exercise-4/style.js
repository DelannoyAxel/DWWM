let data = {
    "id": "0001",
    "type": "gateau",
    "nom": "donuts",
    "price": 0.55,
    "nappages":
    {
        "nappage":
            [
                { "id": "1001", "type": "Chocolat" },
                { "id": "1002", "type": "Fraise" },
                { "id": "1003", "type": "Framboise" },
                { "id": "1004", "type": "Vanille" }
            ]
    },
    "topping":
        [
            { "id": "5001", "type": "Sans Topping" },
            { "id": "5002", "type": "Perles de sucre" },
            { "id": "5003", "type": "Copos de coco" },
            { "id": "5004", "type": "Billes de chocolat" },
            { "id": "5005", "type": "Vermisselles de chocolat" },
        ]
}

const body = document.querySelector('body')

// div card
const card = document.createElement('div');
document.body.appendChild(card);
card.style.width = '250px'
card.style.height = '200px'

card.style.backgroundColor = 'black'
card.style.borderRadius = '20px'
card.style.textAlign = 'center'

// Titre 
const titre = document.createElement('h1');
card.appendChild(titre);
titre.style.color = 'white';
titre.textContent = data.type + ' ' + data.nom;

// prix
const prix = document.createElement('p')
card.appendChild(prix);
prix.style.color = 'white'
prix.textContent = data.price + '€'

// nappages
const nappage = document.createElement('p')
card.appendChild(nappage)
nappage.style.color = 'white'
data.nappages.nappage.forEach(element => {
    nappage.innerHTML += element.type + '<br>';
});


// Création du formulaire
const formulaire1 = document.createElement('div');
document.body.appendChild(formulaire1);
formulaire1.style.border = '1px solid black';
formulaire1.style.width = '300px';

// Parcours des options de nappages et création des boutons radio
data.nappages.nappage.forEach(option => {
    // Création de l'input radio
    const radio = document.createElement('input');
    formulaire1.appendChild(radio);

    radio.type = 'radio';
    radio.name = 'nappage'
    radio.value = option.type;
    
    // Création de l'étiquette pour le bouton radio
    const label = document.createElement('label');
    formulaire1.appendChild(label);

    label.textContent = option.type 
    });


// topping

const formulaire2 = document.createElement('div');
document.body.appendChild(formulaire2);
formulaire2.style.border = '1px solid black';
formulaire2.style.width = '700px';

data.topping.forEach(option => {
    const radioTop = document.createElement ('input');
    formulaire2.appendChild(radioTop);

    radioTop.type = 'radio';
    radioTop.name = 'topping'
    radioTop.value = option.type;
    
    const labelTop = document.createElement('label');
    formulaire2.appendChild(labelTop);

    labelTop.textContent = option.type;

});

const button = document.createElement('button');
document.body.appendChild(button)
button.textContent = 'Valider'
button.style.backgroundColor ='green'


let h2Choix = null; // Initialisez h2Choix à null pour vérifier s'il existe déjà

button.addEventListener('click', () => {
    // Vérifiez si h2Choix existe déjà
    if (!h2Choix) {
        // S'il n'existe pas, créez-le
        h2Choix = document.createElement('h2');
        document.body.appendChild(h2Choix);
        h2Choix.style.width = '900px';
        h2Choix.style.height = '200px';
        h2Choix.style.color = 'black';
    }

    // Récupérer la valeur sélectionnée des boutons radio de nappages
    const selectedNappage = document.querySelector('input[name="nappage"]:checked');
    const nappageValue = selectedNappage ? selectedNappage.value : 'Aucun choix de nappage';

    // Récupérer la valeur sélectionnée des boutons radio de topping
    const selectedTopping = document.querySelector('input[name="topping"]:checked');
    const toppingValue = selectedTopping ? selectedTopping.value : 'Aucun choix de topping';

    // Mettre à jour le contenu de h2Choix avec les nouvelles valeurs
    h2Choix.textContent = 'Votre choix : Nappage - ' + nappageValue + ', Topping - ' + toppingValue;
});

