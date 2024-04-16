const button = document.querySelector('button');
let div1;
let div2;

function removeCarre(div) { 
    const body = document.querySelector('body');
    body.removeChild(div); 
}

button.addEventListener('click', () => {
    div1 = document.createElement('div');
    document.body.appendChild(div1);
    div1.id = 'div1';

    div1.addEventListener ('click',() => {
        removeCarre(div1);
    });

});


setTimeout(() => {
    div2 = document.createElement('div');
    document.body.appendChild(div2);
    div2.id = 'div2';

    div2.addEventListener ('click',() => {
         removeCarre(div2);
    });
}, 3000);


