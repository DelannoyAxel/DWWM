let pages;

// Obtenez le nombre total de pages
fetch("https://rickandmortyapi.com/api/location?page=1")
    .then(response => response.json())
    .then(data => {
        pages = data.info.pages;
    });

    const body = document.querySelector ('body')
    container = document.createElement ('div')
    document.body.appendChild(container)
    container.style.display = 'flex'
    container.style.flexWrap = 'wrap'; 
    container.style.width = '100vw'
    container.style.gap = '50px'
    body.style.height = '100vh'

    setTimeout(() => {
        for (let index = 1; index <= pages; index++) {
            // Pour chaque page, obtenez les données des personnages
            fetch('https://rickandmortyapi.com/api/location?page=' + index)
                .then(response => response.json())
                .then(data => {
                    data.results.forEach(element => {
                        // Créez un seul paragraphe pour afficher les détails du lieu
                        const lieuDetails = document.createElement('p');
    
                        // Concaténez les détails du lieu dans une seule chaîne de caractères
                        lieuDetails.textContent = `Nom: ${element.name}, Type: ${element.type}, Dimension: ${element.dimension}`;
    
                        // Ajoutez le paragraphe contenant les détails du lieu au conteneur
                        container.appendChild(lieuDetails);
                    });
                });
        }
    }, 3000);
    
