let pages;

// Obtenez le nombre total de pages
fetch("https://rickandmortyapi.com/api/character?page=1")
    .then(response => response.json())
    .then(data => {
        pages = data.info.pages;
    });

    const body = document.querySelector ('body')
    container = document.createElement ('div')
    document.body.appendChild(container)
    container.style.display = 'flex'
    container.style.flexWrap = 'wrap'; // Correction ici
    container.style.width = '100vw'
    container.style.gap = '50px'
    body.style.height = '100vh'

// Attendez que la variable pages soit définie
setTimeout(() => {
    for (let index = 1; index <= pages; index++) {
        // Pour chaque page, obtenez les données des personnages
        fetch('https://rickandmortyapi.com/api/character?page=' + index)
            .then(response => response.json())
            .then(data => {
                data.results.forEach(element => {
                    // Créez un élément image pour chaque personnage et affichez son nom
                    const characterImage = document.createElement('img');
                    characterImage.src = element.image;
                    container.appendChild(characterImage);

                    const characterName = document.createElement('div');
                    characterName.textContent = element.name;
                    container.appendChild(characterName);
                });
            });
    }
}, 3000);
