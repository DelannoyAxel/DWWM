let pages;

// Obtenez le nombre total de pages
fetch("https://rickandmortyapi.com/api/episode?page=1")
    .then(response => response.json())
    .then(data => {
        pages = data.info.pages;
    });

    const body = document.querySelector ('body')
    body.style.height = '100vh'

    setTimeout(() => {
        const episodeTable = document.getElementById('episodeTable').getElementsByTagName('tbody')[0];
    
        for (let index = 1; index <= pages; index++) {
            // Pour chaque page, obtenez les données des lieux
            fetch('https://rickandmortyapi.com/api/episode?page=' + index)
                .then(response => response.json())
                .then(data => {
                    data.results.forEach(element => {
                        // Créez une nouvelle ligne pour chaque episode
                        const row = episodeTable.insertRow();
    
                        // Insérez les données du lieu dans les cellules de la ligne
                        const episodeNumberCell = row.insertCell(0);
                        const episodeTitleCell = row.insertCell(1);
                        const episodeDateCell = row.insertCell(2);
    
                        // Affectez les données aux cellules
                        episodeNumberCell.textContent = element.episode;
                        episodeTitleCell.textContent = element.name;
                        episodeDateCell.textContent = element.air_date;
                    });
                });
        }
    }, 3000);
    