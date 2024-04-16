fetch("https://pokeapi.co/api/v2/pokedex/")
.then(response => response.json())
.then(data => {
    console.log(data);
})