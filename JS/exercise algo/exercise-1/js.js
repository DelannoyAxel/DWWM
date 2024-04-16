


const button = document.querySelector('#button');
const carre1 = document.querySelector("#carre1");
let divStyle ;


button.addEventListener('click', () => {
    divStyle = document.createElement('div');
    divStyle.id = 'divStyle'
    carre1.appendChild(divStyle);
});

carre1.addEventListener ('mousemove', (event) => {
  if (divStyle) {
    const mouseX = event.clientX;
    const mouseY = event.clientY;

        const offsetX = divStyle.offsetWidth / 2;
        const offsetY = divStyle.offsetHeight / 2;

    divStyle.style.left = mouseX - offsetX +'px';
    divStyle.style.top = mouseY - offsetY +'px';
    divStyle.style.display = 'block'
    console.log(event);
  }

})
